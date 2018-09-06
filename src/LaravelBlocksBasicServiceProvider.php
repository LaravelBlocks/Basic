<?php

namespace LaravelBlocks\Basic;

use Illuminate\Support\ServiceProvider;

class LaravelBlocksBasicServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../migrations');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravelblocks');
    }

    public function register()
    {
        //
    }
}
