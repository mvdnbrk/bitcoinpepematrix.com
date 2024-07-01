<?php

namespace App\Jobs;

use App\Rune;
use App\Models\RunePrice;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CollectRunePrice implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public string $apiUrl;

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
            $model = new RunePrice;

            $model->ticker = $this->rune->tickerWithoutSpacers;
            $model->price_in_sats = $response->json('floorUnitPrice.value');

            $model->save();
        }
    }
}
