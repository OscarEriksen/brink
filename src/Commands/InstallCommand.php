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
        $filesystem = new Filesystem;

        if ($this->option('force') || (!$filesystem->exists(resource_path('assets/sass/app.scss'))))
        {
            Brink::install();
            return $this->successfully();
        }

        if ($this->confirm('A file called app.scss already exists. Are you sure you want to install Brink? This will overwrite the current files.')) {
            Brink::install();
            return $this->successfully();
        } 

        $this->line('That\'s okay.');
        $this->line('Brink will not be installed. If this was a mistake, run the command again and be sure to accept when asked for confirmation or use the --force option.');
    }
    
    public function successfully()
    {
        $this->info('Brink installed successfully.');
        $this->info('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
    }
}
