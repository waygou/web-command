<?php

namespace Waygou\WebCommand;

use Illuminate\Support\ServiceProvider;
use Waygou\WebCommand\Commands\WebCommand;

class WebCommandServiceProvider extends ServiceProvider
{
    public function boot()
    {
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
