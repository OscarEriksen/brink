<?php

namespace PeterBrinck\Brink;


use Illuminate\Support\ServiceProvider;

class BrinkServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerConsoleCommands();
    }

    public function boot()
    {
        \Artisan::call('brink');

    }

    private function registerConsoleCommands()
    {
        $this->commands(Commands\InstallCommand::class);
    }
}
