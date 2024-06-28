<?php

namespace Tests\Unit\Jobs;

use App\Rune;
use Tests\TestCase;
use App\Jobs\CacheFloorPrice;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class CacheFloorPriceTest extends TestCase
{
    public function test_it_caches_the_floor_price(): void
    {
        Http::fake([
            'api-mainnet.magiceden.dev/*' => Http::response([
                'floorUnitPrice' => ['value' => 0.12],
            ], 200),
        ]);

        $rune = new Rune(['ticker' => 'BITCOIN•PEPE•MATRIX']);

        CacheFloorPrice::dispatch($rune);

        $this->assertTrue(Cache::has('floor_price'));
        $this->assertEquals(0.12, Cache::get('floor_price'));
    }
}
