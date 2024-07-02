<?php

namespace App\Console\Commands;

use App\Jobs\CacheMarketCap;
use App\Rune;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class CacheMarketCapCommand extends Command
{
    protected $signature = 'rune:cache-market-cap';

    protected $description = 'Cache the market cap';

    public function handle()
    {
        $rune = new Rune(config('rune'));

        CacheMarketCap::dispatchSync($rune);

        $this->info('The market cap for '.$rune->ticker.' is '.Cache::get('market_cap', default: 'unknown'));
    }
}
