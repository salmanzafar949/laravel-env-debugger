<?php

namespace Salman\EnvDebugger;

use Illuminate\Support\ServiceProvider;
use Salman\EnvDebugger\Commands\EnvDebuggerCommand;

class EnvDebuggerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands([
            EnvDebuggerCommand::class
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->LoadAndMergeConfig();
    }

    public function LoadAndMergeConfig()
    {
        $this->mergeConfigFrom(__DIR__.'/config/envdebugger.php','envdebugger');
        $this->publishes([
            __DIR__.'/config/envdebugger.php' => config_path('envdebugger.php'),
        ]);
    }
}
