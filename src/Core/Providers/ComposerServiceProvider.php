<?php

namespace Themosis\Core\Providers;

use Illuminate\Support\Composer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Support\DeferrableProvider;

class ComposerServiceProvider extends ServiceProvider implements DeferrableProvider
{

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('composer', function ($app) {
            return new Composer($app['files'], $app->basePath());
        });
    }

    /**
     * Return list of services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['composer'];
    }
}
