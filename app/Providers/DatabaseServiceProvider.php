<?php

namespace LaravelTokyo\Providers;

use Jumilla\Versionia\Laravel\Support\DatabaseServiceProvider as ServiceProvider;
use LaravelTokyo\Database\Migrations;
use LaravelTokyo\Database\Seeds;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->migrations('framework', [
            '1.0' => Migrations\Framework_1_0::class,
            '1.1' => Migrations\Framework_1_1::class,
        ]);

        $this->seeds([
            'test' => Seeds\Test::class,
            'production' => Seeds\Production::class,
        ]);
    }
}
