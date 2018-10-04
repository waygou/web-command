<?php

namespace Waygou\WebCommand;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Waygou\WebCommand\Commands\WebCommand;

class WebCommandServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'webcommand');

        Route::group(['middleware' => 'web', 'namespace' => 'Waygou\WebCommand\Controllers'], function ($router) {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }

    public function register()
    {
        $this->commands([
            WebCommand::class, ]);
    }

    public function loadViews()
    {
    }
}
