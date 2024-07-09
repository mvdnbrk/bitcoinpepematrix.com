<?php

namespace Tests\Unit\Jobs;

use App\Jobs\CacheHolderCount;
use App\Rune;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class CacheHolderCountTest extends TestCase
{
    #[Test]
    public function it_caches_the_holder_count(): void
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
