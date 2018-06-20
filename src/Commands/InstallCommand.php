<?php

namespace PeterBrinck\Brink\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use PeterBrinck\Brink\Brink;

class InstallCommand extends Command
{
    protected $signature = 'brink {--force}';

    protected $description = 'Installing Brink';

    public function handle()
    {
        if ($this->option('force')) {
            Brink::install();

            $this->successfully();
        } else {
            $filesystem = new Filesystem;
            if ($filesystem->exists(resource_path('assets/sass/app.scss'))) {
                if ($this->confirm('A file called app.scss already exists. Are you sure you want to install Brink? This will overwrite the current files.')) {
                    Brink::install();

                    $this->successfully();
                } else {
                    $this->line('That\'s okay.');
                    $this->line('Brink will not be installed. If this was a mistake, run the command again and be sure to accept when asked for confirmation or use the --force option.');
                }
            } else {
                Brink::install();

                $this->successfully();
            }
        }
    }

    public function successfully()
    {
        $this->info('Brink installed successfully.');
        $this->info('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
    }
}
