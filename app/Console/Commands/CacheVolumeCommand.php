<?php

namespace App\Console\Commands;

use App\Jobs\CacheVolume;
use App\Rune;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class CacheVolumeCommand extends Command
{
    protected $signature = 'rune:cache-volume';

    protected $description = 'Cache the volume in BTC for the last 30 days';

    public function handle()
    {
        $rune = new Rune(config('rune'));

        CacheVolume::dispatchSync($rune);

        $this->info('The volume in the last 30 days for '.$rune->ticker.' is '.Cache::get('volume_in_btc_30_days', default: 'unknown').' BTC');
    }
}
