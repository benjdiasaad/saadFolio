<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Deprecations Log Channel
    |--------------------------------------------------------------------------
    */

    'deprecations' => [
        'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
        'trace' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    */

    'channels' => [

        /*
        |--------------------------------------------------------------------------
        | Stack
        |--------------------------------------------------------------------------
        | Main application logs
        */
        'stack' => [
            'driver' => 'stack',
            'channels' => ['daily'],
            'ignore_exceptions' => false,
        ],

        /*
        |--------------------------------------------------------------------------
        | Single File Log
        |--------------------------------------------------------------------------
        */
        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        /*
        |--------------------------------------------------------------------------
        | Daily Log (Recommended)
        |--------------------------------------------------------------------------
        */
        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'days' => 14,
        ],

        /*
        |--------------------------------------------------------------------------
        | Portfolio Visits Log (Custom)
        |--------------------------------------------------------------------------
        */
        'visits' => [
            'driver' => 'daily',
            'path' => storage_path('logs/visits.log'),
            'level' => 'info',
            'days' => 30,
        ],

        /*
        |--------------------------------------------------------------------------
        | Slack
        |--------------------------------------------------------------------------
        */
        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Laravel Log',
            'emoji' => ':boom:',
            'level' => env('LOG_LEVEL', 'critical'),
        ],

        /*
        |--------------------------------------------------------------------------
        | Papertrail
        |--------------------------------------------------------------------------
        */
        'papertrail' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => env('LOG_PAPERTRAIL_HANDLER', SyslogUdpHandler::class),
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
                'connectionString' => 'tls://' . env('PAPERTRAIL_URL') . ':' . env('PAPERTRAIL_PORT'),
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | STDERR
        |--------------------------------------------------------------------------
        */
        'stderr' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => StreamHandler::class,
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'with' => [
                'stream' => 'php://stderr',
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | Syslog
        |--------------------------------------------------------------------------
        */
        'syslog' => [
            'driver' => 'syslog',
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        /*
        |--------------------------------------------------------------------------
        | Errorlog
        |--------------------------------------------------------------------------
        */
        'errorlog' => [
            'driver' => 'errorlog',
            'level' => env('LOG_LEVEL', 'debug'),
        ],

        /*
        |--------------------------------------------------------------------------
        | Null
        |--------------------------------------------------------------------------
        */
        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        /*
        |--------------------------------------------------------------------------
        | Emergency
        |--------------------------------------------------------------------------
        */
        'emergency' => [
            'path' => storage_path('logs/laravel.log'),
        ],
    ],
];
