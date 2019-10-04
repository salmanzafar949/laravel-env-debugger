<?php

namespace Salman\EnvDebugger\Commands;

use Illuminate\Console\Command;

class EnvDebuggerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'debug:env';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Debug .env easily';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

    }
}
