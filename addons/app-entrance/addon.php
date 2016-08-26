<?php

namespace LaravelTokyo\Entrance;

return [
    'version' => 5,
    'namespace' => __NAMESPACE__,
    'directories' => [
        'classes',
    ],
    'files' => [
        'helpers.php',
    ],
    'paths' => [
        'config' => 'config',
        'assets' => 'assets',
        'lang' => 'lang',
        'specs' => 'specs',
        'views' => 'views',
    ],
    'providers' => [
        Providers\AddonServiceProvider::class,
        Providers\DatabaseServiceProvider::class,
        Providers\RouteServiceProvider::class,
    ],
    'console' => [
        'commands' => [
        ],
    ],
    'http' => [
        'middlewares' => [
        ],
        'route_middlewares' => [
        ],
    ],
    'routes' => [
        'domain' => env('APP_ENTRANCE_DOMAIN', null),
        'prefix' => env('APP_ENTRANCE_PATH', ''),
        'namespace' => __NAMESPACE__.'\Controllers',
        'middleware' => [
            'web',
        ],
        'files' => [
            'routes.php',
        ],
    ],
];
