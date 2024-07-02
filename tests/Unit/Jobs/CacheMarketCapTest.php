<?php

namespace Tests\Unit\Jobs;

use App\Jobs\CacheMarketCap;
use App\Rune;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class CacheMarketCapTest extends TestCase
{
    public function test_it_caches_the_marketcap(): void
    {
        Http::fake([
            'api-mainnet.magiceden.dev/*' => Http::response(['marketCap' => 12.345], 200),
        ]);

        $rune = new Rune(['ticker' => 'BITCOIN•PEPE•MATRIX']);

        CacheMarketCap::dispatch($rune);

        $this->assertTrue(Cache::has('market_cap'));
        $this->assertEquals(12.345, Cache::get('market_cap'));
    }
}
