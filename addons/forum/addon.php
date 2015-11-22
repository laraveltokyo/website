<?php

use LaravelTokyo\Forum as Addon;

return [
    'version' => 5,
    'namespace' => 'LaravelTokyo\Forum',
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
        'middlewares' => [
        ],
        'route_middlewares' => [
        ],
    ],
    'includes_global_aliases' => true,
    'aliases' => [
    ],
];
