<?php

namespace App\Appadmin;

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
        'assets' => 'resources/assets',
        'lang' => 'resources/lang',
        'specs' => 'resources/specs',
        'views' => 'resources/views',
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
        'domain' => env('APP_ENTRANCE_DOMAIN'),
        'prefix' => env('APP_ENTRANCE_PATH'),
    ],
    'includes_global_aliases' => true,
    'aliases' => [
    ],
];
