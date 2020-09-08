<?php

namespace FleetCart\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;
use Mehedi\Stylist\StylistServiceProvider;
use Nwidart\Modules\LaravelModulesServiceProvider;
use Jackiedo\DotenvEditor\DotenvEditorServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        if (Request::secure()) {
            URL::forceScheme('https');
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(StylistServiceProvider::class);
        $this->app->register(LaravelModulesServiceProvider::class);

        if (! config('app.installed')) {
            $this->app->register(DotenvEditorServiceProvider::class);
        }
    }
}
