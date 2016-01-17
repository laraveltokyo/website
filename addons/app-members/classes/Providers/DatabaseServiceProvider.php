<?php

namespace LaravelTokyo\Members\Providers;

use Jumilla\Versionia\Laravel\Support\DatabaseServiceProvider as ServiceProvider;
use LaravelTokyo\Members\Database\Migrations;
use LaravelTokyo\Members\Database\Seeds;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap database services.
     *
     * @return void
     */
    public function boot()
    {
        $this->migrations('members', [
//            '1.0' => Migrations\Members_1_0::class,
        ]);

        $this->seeds([
//            'members-test' => Seeds\Test::class,
        ]);
    }
}
