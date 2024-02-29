<?php

namespace C6Digital\LaravelForceHttps\Commands;

use Illuminate\Console\Command;

class LaravelForceHttpsCommand extends Command
{
    public $signature = 'laravel-force-https';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
