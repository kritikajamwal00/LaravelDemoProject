<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class LogCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'log:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to send message';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        info(message: 'schedule start');
        sleep(65);
        info(message: 'schedule end');
    }
}
