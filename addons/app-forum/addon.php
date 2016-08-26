<?php

namespace LaravelTokyo\Forum;

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
        'tests' => 'tests',
    ],
    'providers' => [
        Providers\AddonServiceProvider::class,
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
        'domain' => env('APP_FORUM_DOMAIN', null),
        'prefix' => env('APP_FORUM_PATH', 'forum'),
        'namespace' => __NAMESPACE__.'\Controllers',
        'middleware' => [
            'web',
        ],
        'files' => [
            'routes.php',
        ],
    ],
];
