<?php

namespace Snapey\LaravelSlurp\Commands;

use Illuminate\Console\Command;

class LaravelSlurpCommand extends Command
{
    public $signature = 'laravel-slurp';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
