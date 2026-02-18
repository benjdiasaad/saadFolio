<?php

namespace App\Http\Middleware;

use Closure;
use GeoIp2\Database\Reader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Jenssegers\Agent\Agent;

class TrackVisits
{
    public function handle(Request $request, Closure $next)
    {

        $response = $next($request);

        // Track only real page views (GET HTML), skip assets
        if (!$request->isMethod('GET') || $request->expectsJson()) {
            logger('skip');
            return $response;
        }

        if ($request->is('assets/*') || $request->is('storage/*') || $request->is('favicon.ico')) {
            logger('skip 2');
            return $response;
        }

        $ip = $request->ip();
        $ua = (string) $request->userAgent();

        $fingerprint = sha1($ip . '|' . $ua . '|' . $request->path());

        if (Cache::has("visit:seen:$fingerprint")) {
            return $response;
        }

        Cache::put("visit:seen:$fingerprint", true, now()->addMinutes(5));

        $agent = new Agent();

        $agent->setUserAgent($ua);

        $geo = $this->geoLookup($ip);

        Log::channel('visits')->info('portfolio_visit', [
            'time' => now()->toDateTimeString(),
            'ip' => $ip,
            'method' => $request->method(),
            'url' => $request->fullUrl(),
            'path' => $request->path(),
            'referer' => $request->headers->get('referer'),
            'browser' => $agent->browser(),
            'browser_ver' => $agent->version($agent->browser()),
            'platform' => $agent->platform(),
            'platform_ver'=> $agent->version($agent->platform()),
            'device' => $agent->device(),
            'is_mobile' => $agent->isMobile(),
            'is_tablet'=> $agent->isTablet(),
            'is_desktop'=> $agent->isDesktop(),
            'is_robot'=> $agent->isRobot(),
            'robot_name'=> $agent->robot(),

            // Geo info
            'country'=> $geo['country'] ?? null,
            'city'=> $geo['city'] ?? null,
            'region'=> $geo['region'] ?? null,
            'postal'=> $geo['postal'] ?? null,
            'lat'=> $geo['lat'] ?? null,
            'lon'=> $geo['lon'] ?? null,
            'timezone'=> $geo['timezone'] ?? null,
        ]);

        return $response;
    }

    private function geoLookup(string $ip): ?array
    {
        return Cache::remember("geo:mmdb:$ip", now()->addDays(7), function () use ($ip) {

            if ($ip === '127.0.0.1' || $ip === '::1' || filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE) === false) {
                return null;
            }

            $dbPath = storage_path('app/geoip/GeoLite2-City.mmdb');
            if (!file_exists($dbPath)) {
                return null;
            }

            try {
                $reader = new Reader($dbPath);
                $record = $reader->city($ip);

                return [
                    'country'=> $record->country->name,
                    'city'=> $record->city->name,
                    'region'=> $record->mostSpecificSubdivision->name,
                    'postal'=> $record->postal->code,
                    'lat'=> $record->location->latitude,
                    'lon'=> $record->location->longitude,
                    'timezone' => $record->location->timeZone,
                ];
            } catch (\Throwable $e) {
                return null;
            }
        });
    }
}
