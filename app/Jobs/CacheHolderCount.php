<?php

namespace App\Jobs;

use App\Rune;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class CacheHolderCount implements ShouldQueue
{
    use Dispatchable, Queueable;

    protected string $apiUrl;

    public function __construct(
        public Rune $rune,
    ) {
        $this->apiUrl = 'https://api-mainnet.magiceden.dev/v2/ord/btc/runes/market/'.$this->rune->tickerWithoutSpacers.'/info';
    }

    public function handle(): void
    {
        $response = Http::withToken(config('magiceden.api_key'))
            ->acceptJson()
            ->get($this->apiUrl);

        if ($response->successful()) {
            Cache::put('holder_count', $response->json('holderCount'));
        }
    }
}
