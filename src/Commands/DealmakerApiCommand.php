<?php

namespace Digitonic\DealmakerApi\Commands;

use Illuminate\Console\Command;

class DealmakerApiCommand extends Command
{
    public $signature = 'dealmaker-api';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
