<?php

namespace App\Console\Commands;

use App\Rune;
use App\Jobs\CacheHolderCount;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class CacheHolderCountCommand extends Command
{
    protected $signature = 'rune:cache-holder-count';

    protected $description = 'Cache the holder count';

    public function handle()
    {
        $rune =  new Rune(config('rune'));

        CacheHolderCount::dispatchSync($rune);

        $this->info('The holder count for '.$rune->ticker.' is '.Cache::get('holder_count', default: 'unknown'));
    }
}
