<dl class="mx-auto rounded-lg p-12 mt-16 bg-green-900 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-10 text-white sm:mt-20 sm:grid-cols-2 sm:gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-4">
    <div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
        <dt class="text-sm leading-6">HOLDERS</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight">
            {{ Cache::get('holder_count') }}
        </dd>
    </div>
    <div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
        <dt class="text-sm leading-6">TRADES (30D)</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight">
            {{ Cache::get('transaction_count_30_days') }}
        </dd>
    </div>
    <div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
        <dt class="text-sm leading-6">MARKET CAP</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight">
            {{ Number::format(Cache::get('market_cap'), precision: 2) }} BTC
        </dd>
    </div>
    <div class="flex flex-col gap-y-3 border-l border-white/10 pl-6">
        <dt class="text-sm leading-6">FLOOR PRICE</dt>
        <dd class="order-first text-3xl font-semibold tracking-tight">
            {{ Cache::get('floor_price') }} sats
        </dd>
    </div>
</dl>
