<?php

namespace App\Console\Commands;

use App\Rune;
use App\Jobs\CacheFloorPrice;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class CacheFloorPriceCommand extends Command
{
    protected $signature = 'rune:cache-floor-price';

    protected $description = 'Cache the floor price';

    public function handle()
    {
        $rune =  new Rune(config('rune'));

        CacheFloorPrice::dispatchSync($rune);

        $this->info('The floor price for '.$rune->ticker.' is '.Cache::get('floor_price', default: 'unknown'));
    }
}
