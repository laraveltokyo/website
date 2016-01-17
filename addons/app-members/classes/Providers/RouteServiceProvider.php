<?php

namespace LaravelTokyo\Members\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Routing group prefix.
     *
     * @var string
     */
    protected $prefix = 'addons/members';

    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'LaravelTokyo\Members\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param \Illuminate\Routing\Router $router
     * @return void
     */
    public function boot(Router $router)
    {
        parent::boot($router);
    }

    /**
     * Define the routes for the addon.
     *
     * @param \Illuminate\Routing\Router $router (injection)
     * @return void
     */
    public function map(Router $router)
    {
        $domain = addon()->config('addon.http.domain');
        $prefix = addon()->config('addon.http.prefix');
        $namespace = addon()->config('addon.namespace').'\Http\Controllers';

        $router->group(['domain' => $domain, 'prefix' => $prefix, 'namespace' => $namespace], function ($router) {
            require __DIR__.'/../Http/routes.php';
        });
    }
}