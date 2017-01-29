<?php

namespace LaravelTokyo\Forum\Providers;

use Illuminate\Routing\Router;
use Jumilla\Addomnipot\Laravel\Support\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Get addon.
     *
     * @return \Jumilla\Addomnipot\Laravel\Addon
     */
    protected function addon()
    {
        return addon();
    }
}
