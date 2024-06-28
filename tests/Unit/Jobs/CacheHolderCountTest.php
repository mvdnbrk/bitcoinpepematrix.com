<?php

namespace Tests\Unit\Jobs;

use App\Rune;
use Tests\TestCase;
use App\Jobs\CacheHolderCount;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class CacheHolderCountTest extends TestCase
{
    public function test_it_caches_the_holder_count(): void
    {
        Http::fake([
            'api-mainnet.magiceden.dev/*' => Http::response(['holderCount' => 123], 200),
        ]);

        $rune = new Rune(['ticker' => 'BITCOIN•PEPE•MATRIX']);

        CacheHolderCount::dispatch($rune);

        $this->assertTrue(Cache::has('holder_count'));
        $this->assertEquals(123, Cache::get('holder_count'));
    }
}
