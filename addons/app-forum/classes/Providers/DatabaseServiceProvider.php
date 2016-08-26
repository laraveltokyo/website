<?php

namespace LaravelTokyo\Forum\Providers;

use Jumilla\Versionia\Laravel\Support\DatabaseServiceProvider as ServiceProvider;
use LaravelTokyo\Forum\Database\Migrations;
use LaravelTokyo\Forum\Database\Seeds;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap database services.
     *
     * @return void
     */
    public function boot()
    {
        $this->migrations('app-forum', [
            '1.0' => Migrations\AppForum_1_0::class,
        ]);

        $this->seeds([
//            'app-forum-test' => Seeds\Test::class,
        ]);
    }
}
