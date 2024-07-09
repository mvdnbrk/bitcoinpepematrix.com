<?php

namespace Tests\Unit\Jobs;

use App\Jobs\CacheTransactionCount;
use App\Rune;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class CacheTransactionCountTest extends TestCase
{
    #[Test]
    public function it_caches_the_transaction_count(): void
    {
        Http::fake([
            'api-mainnet.magiceden.dev/*' => Http::response([
                'txnCount' => [
                    '30d' => 123,
                ],
            ], 200),
        ]);

        $rune = new Rune(['ticker' => 'BITCOIN•PEPE•MATRIX']);

        CacheTransactionCount::dispatch($rune);

        $this->assertTrue(Cache::has('transaction_count_30_days'));
        $this->assertEquals(123, Cache::get('transaction_count_30_days'));
    }
}
