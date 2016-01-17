<?php

use LaravelTokyo\Members as Addon;

return [
    'version' => 5,
    'namespace' => 'LaravelTokyo\Members',
    'directories' => [
        'classes',
    ],
    'files' => [
        'helpers.php',
    ],
    'paths' => [
        'config' => 'config',
        'assets' => 'resources/assets',
        'lang' => 'resources/lang',
        'specs' => 'resources/specs',
        'views' => 'resources/views',
    ],
    'providers' => [
        Addon\Providers\AddonServiceProvider::class,
        Addon\Providers\DatabaseServiceProvider::class,
        Addon\Providers\RouteServiceProvider::class,
    ],
    'console' => [
        'commands' => [
        ],
    ],
    'http' => [
        'domain' => env('APP_MEMBERS_DOMAIN'),
        'prefix' => env('APP_MEMBERS_PATH'),
        'middlewares' => [
        ],
        'route_middlewares' => [
        ],
    ],
    'includes_global_aliases' => true,
    'aliases' => [
    ],
];
