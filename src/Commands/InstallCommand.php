<?php

namespace PeterBrinck\Brink\Commands;

use Illuminate\Console\Command;
use PeterBrinck\Brink\Brink;

class InstallCommand extends Command
{

    protected $signature = 'brink';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Brink';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Brink::install();

        $this->info('Brink installed successfully.');
        $this->info('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
    }
}
