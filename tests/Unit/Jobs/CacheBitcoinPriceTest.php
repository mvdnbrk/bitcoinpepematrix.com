<?php

namespace Tests\Unit\Jobs;

use App\Jobs\CacheBitcoinPrice;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class CacheBitcoinPriceTest extends TestCase
{
    public function test_it_caches_the_bitcoin_price(): void
    {
        Http::fake([
            'pro-api.coinmarketcap.com/*' => Http::response([
                'data' => [
                    'BTC' => [
                        'quote' => [
                            'USD' => [
                                'price' => 98765,
                            ],
                        ],
                    ],
                ],
            ], 200),
        ]);

        CacheBitcoinPrice::dispatch();

        $this->assertTrue(Cache::has('bitcoin_price'));
        $this->assertEquals(98765, Cache::get('bitcoin_price'));
    }
}
