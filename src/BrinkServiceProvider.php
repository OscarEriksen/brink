<?php

namespace PeterBrinck\Brink;

use Illuminate\Support\ServiceProvider;

class BrinkServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerConsoleCommands();
    }

    private function registerConsoleCommands()
    {
        $this->commands(Commands\InstallCommand::class);
    }
}
