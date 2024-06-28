<?php

namespace App\Jobs;

use App\Rune;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CacheFloorPrice implements ShouldQueue
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
            Cache::put('floor_price', $response->json('floorUnitPrice.value'));
        }
    }
}
