<?php

namespace LaravelTokyo\Entrance\Providers;

use Jumilla\Versionia\Laravel\Support\DatabaseServiceProvider as ServiceProvider;
use LaravelTokyo\Entrance\Database\Migrations;
use LaravelTokyo\Entrance\Database\Seeds;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap database services.
     *
     * @return void
     */
    public function boot()
    {
        $this->migrations('entrance', [
//            '1.0' => Migrations\Entrance_1_0::class,
        ]);

        $this->seeds([
//            'entrance-test' => Seeds\Test::class,
        ]);
    }
}
