<?php

namespace LaravelTokyo\Members\Providers;

class AddonServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupPublishFiles();
    }

    /**
     * Setup publish files.
     *
     * @return void
     */
    protected function setupPublishFiles()
    {
        $this->publishes([
//            addon_path(addon_name(), 'public') => base_path('public'),
        ]);
    }
}
