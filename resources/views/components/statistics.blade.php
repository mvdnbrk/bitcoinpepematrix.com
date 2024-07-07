<dl class="mx-auto rounded-lg p-12 mt-16 bg-green-900 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-10 text-white sm:mt-20 sm:grid-cols-2 sm:gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-5">
    @if(Cache::has('holder_count'))
    <div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
        <dt class="text-sm leading-6">HOLDERS</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight">
            {{ Cache::get('holder_count') }}
        </dd>
    </div>
    @endif
    @if(Cache::has('market_cap'))
    <div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
        <dt class="text-sm leading-6">MARKET CAP</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight">
            {{ Number::format(Cache::get('market_cap'), precision: 2) }} BTC
        </dd>
    </div>
    @endif
    @if(Cache::has('floor_price'))
    <div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
        <dt class="text-sm leading-6">FLOOR PRICE</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight">
            {{ Number::format(Cache::get('floor_price'), precision: 2) }} sats
        </dd>
    </div>
    @endif
    @if(Cache::has('transaction_count_30_days'))
    <div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
        <dt class="text-sm leading-6">TRADES (30D)</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight">
            {{ Cache::get('transaction_count_30_days') }}
        </dd>
    </div>
    @endif
    @if(Cache::has('volume_in_btc_30_days'))
    <div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
        <dt class="text-sm leading-6">VOLUME (30D)</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight">
            {{ Number::format(Cache::get('volume_in_btc_30_days'), precision: 2) }} BTC
        </dd>
    </div>
    @endif
</dl>
