<?php

namespace Tests\Unit\Jobs;

use App\Jobs\CacheVolume;
use App\Rune;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class CacheVolumeTest extends TestCase
{
    public function test_it_caches_the_transaction_count(): void
    {
        Http::fake([
            'api-mainnet.magiceden.dev/*' => Http::response([
                'volume' => [
                    '30d' => 99999,
                ],
            ], 200),
        ]);

        $rune = new Rune(['ticker' => 'BITCOIN•PEPE•MATRIX']);

        CacheVolume::dispatch($rune);

        $this->assertTrue(Cache::has('volume_in_btc_30_days'));
        $this->assertEquals(99999 / 100000000, Cache::get('volume_in_btc_30_days'));
    }
}
