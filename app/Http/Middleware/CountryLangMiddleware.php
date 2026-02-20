<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Location;

class CountryLangMiddleware
{
    private $countryLangMap = [
        'ax' => 'en', 'al' => 'en', 'dz' => 'fr', 'as' => 'en', 'ad' => 'fr',
        'ao' => 'en', 'ai' => 'en', 'ag' => 'en', 'ar' => 'en', 'am' => 'en',
        'aw' => 'en', 'au' => 'en', 'at' => 'en', 'az' => 'en', 'bs' => 'en',
        'bh' => 'en', 'bd' => 'en', 'bb' => 'en', 'by' => 'en', 'be' => 'fr',
        'bz' => 'en', 'bj' => 'fr', 'bm' => 'en', 'bt' => 'en', 'bo' => 'en',
        'bq' => 'en', 'ba' => 'en', 'bw' => 'en', 'br' => 'en', 'bn' => 'en',
        'bg' => 'en', 'bf' => 'fr', 'bi' => 'fr', 'kh' => 'en', 'cm' => 'fr',
        'ca' => 'en', 'ic' => 'en', 'cv' => 'fr', 'ky' => 'en', 'cf' => 'fr',
        'td' => 'fr', 'cl' => 'en', 'cn' => 'en', 'co' => 'en', 'km' => 'fr',
        'cg' => 'fr', 'ck' => 'en', 'cr' => 'en', 'hr' => 'en', 'cw' => 'en',
        'cy' => 'en', 'cz' => 'en', 'dk' => 'en', 'dj' => 'fr', 'dm' => 'en',
        'do' => 'en', 'ec' => 'en', 'eg' => 'fr', 'sv' => 'en', 'gq' => 'fr',
        'er' => 'en', 'ee' => 'en', 'et' => 'fr', 'fk' => 'en', 'fo' => 'en',
        'fj' => 'en', 'fi' => 'en', 'fr' => 'fr', 'gf' => 'fr', 'pf' => 'fr',
        'tf' => 'fr', 'ga' => 'en', 'gm' => 'en', 'ge' => 'en', 'de' => 'en',
        'gh' => 'en', 'gi' => 'en', 'gr' => 'en', 'gl' => 'en', 'gd' => 'en',
        'gp' => 'fr', 'gu' => 'en', 'gt' => 'en', 'gg' => 'en', 'gn' => 'fr',
        'gw' => 'fr', 'gy' => 'en', 'ht' => 'fr', 'hm' => 'en', 'hn' => 'en',
        'hk' => 'en', 'hu' => 'en', 'is' => 'en', 'in' => 'en', 'id' => 'en',
        'iq' => 'fr', 'ie' => 'en', 'im' => 'en', 'il' => 'en', 'it' => 'en',
        'ci' => 'fr', 'jm' => 'en', 'jp' => 'en', 'je' => 'en', 'jo' => 'fr',
        'kz' => 'en', 'ke' => 'en', 'ki' => 'en', 'kr' => 'en', 'kw' => 'fr',
        'kg' => 'en', 'la' => 'en', 'lv' => 'en', 'lb' => 'fr', 'ls' => 'en',
        'lr' => 'fr', 'li' => 'en', 'lt' => 'en', 'lu' => 'fr', 'mo' => 'en',
        'mk' => 'en', 'mg' => 'fr', 'mw' => 'en', 'my' => 'en', 'mv' => 'en',
        'ml' => 'fr', 'mt' => 'en', 'mh' => 'en', 'mq' => 'fr', 'mr' => 'fr',
        'mu' => 'fr', 'yt' => 'fr', 'mx' => 'en', 'fm' => 'en', 'md' => 'en',
        'mc' => 'en', 'mn' => 'en', 'me' => 'en', 'ms' => 'en', 'ma' => 'fr',
        'mz' => 'en', 'mm' => 'en', 'na' => 'en', 'nr' => 'en', 'np' => 'en',
        'nl' => 'en', 'nc' => 'en', 'nz' => 'en', 'ni' => 'en', 'ne' => 'fr',
        'ng' => 'en', 'nu' => 'en', 'nf' => 'en', 'mp' => 'en', 'no' => 'en',
        'om' => 'en', 'pk' => 'en', 'pw' => 'en', 'ps' => 'fr', 'pa' => 'en',
        'pg' => 'en', 'py' => 'en', 'pe' => 'en', 'ph' => 'en', 'pn' => 'en',
        'pl' => 'en', 'pt' => 'en', 'pr' => 'en', 'qa' => 'en', 're' => 'fr',
        'ro' => 'en', 'ru' => 'en', 'rw' => 'fr', 'sh' => 'en', 'pm' => 'fr',
        'ws' => 'en', 'sm' => 'en', 'st' => 'fr', 'sa' => 'fr', 'sn' => 'fr',
        'rs' => 'en', 'sc' => 'fr', 'sl' => 'fr', 'sg' => 'en', 'sk' => 'en',
        'si' => 'en', 'sb' => 'en', 'za' => 'en', 'ss' => 'fr', 'es' => 'en',
        'lk' => 'en', 'bl' => 'fr', 'kn' => 'fr', 'lc' => 'fr', 'mf' => 'fr',
        'vc' => 'fr', 'sd' => 'fr', 'sr' => 'en', 'sj' => 'en', 'sz' => 'en',
        'se' => 'en', 'ch' => 'fr', 'tw' => 'en', 'tj' => 'en', 'tz' => 'fr',
        'th' => 'en', 'tl' => 'en', 'tg' => 'fr', 'tk' => 'en', 'to' => 'en',
        'tt' => 'en', 'tn' => 'fr', 'tr' => 'en', 'tm' => 'en', 'tc' => 'en',
        'tv' => 'en', 'ug' => 'en', 'ua' => 'en', 'ae' => 'en', 'gb' => 'en',
        'us' => 'en', 'um' => 'en', 'uy' => 'en', 'uz' => 'en', 'vu' => 'en',
        'va' => 'fr', 've' => 'en', 'vn' => 'en', 'vg' => 'en', 'vi' => 'en',
        'wf' => 'fr', 'eh' => 'fr', 'ye' => 'fr', 'zm' => 'fr', 'zw' => 'fr'
    ];

    public function handle($request, Closure $next)
    {

        $ip = $request->header('X-Forwarded-For') ?? $request->ip();
        
        $ip = trim(explode(',', (string) $ip)[0]);

        $position = Location::get($ip);

        $countryCode = $position ? strtolower($position->countryCode) : 'ma';

        $defaultLang = $this->countryLangMap[$countryCode] ?? 'fr';

        App::setLocale($defaultLang);

        Session::put('locale', $defaultLang);

        return $next($request);
    }
}
