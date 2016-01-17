<?php

namespace App\Appadmin\Providers;

use Jumilla\Versionia\Laravel\Support\DatabaseServiceProvider as ServiceProvider;
use App\Appadmin\Database\Migrations;
use App\Appadmin\Database\Seeds;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap database services.
     *
     * @return void
     */
    public function boot()
    {
        $this->migrations('admin', [
//            '1.0' => Migrations\Admin_1_0::class,
        ]);

        $this->seeds([
//            'appadmin-test' => Seeds\Test::class,
        ]);
    }
}
