<?php

namespace App\Console\Commands;

use App\Jobs\CacheTransactionCount;
use App\Rune;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class CacheTransactionCountCommand extends Command
{
    protected $signature = 'rune:cache-transaction-count';

    protected $description = 'Cache the transaction count for the last 30 days';

    public function handle()
    {
        $rune = new Rune(config('rune'));

        CacheTransactionCount::dispatchSync($rune);

        $this->info('The transaction count in the last 30 days for '.$rune->ticker.' is '.Cache::get('transaction_count_30_days', default: 'unknown'));
    }
}
