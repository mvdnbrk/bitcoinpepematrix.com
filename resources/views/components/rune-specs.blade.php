<dl class="divide-y divide-lime-950">
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            RUNE ID
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            {{ $rune->id }}
        </dd>
    </div>
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            RUNE NUMBER
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            {{ $rune->number }}
        </dd>
    </div>
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            DEPLOY DATE
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            {{ \Carbon\Carbon::parse(config('rune.deploy_datetime'))->toDayDateTimeString() }} (UTC)
        </dd>
    </div>
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            DEPLOY TX
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            <a
                href="{{ Str::of('https://ordiscan.com/tx/')->append(config('rune.etching_tx')) }}"
                target="_blank"
                rel="noopener"
                class="underline hover:no-underline"
            >
                {{ Str::of($rune->etching_tx)->mask('.', 5, -5)->replaceMatches('/(\.)\\1+/', '.....') }}
            </a>
        </dd>
    </div>
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            MINT BLOCK
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            {{ config('rune.mint_block_window') }}
        </dd>
    </div>
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            PREMINE
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            {{ $rune->premine }}
        </dd>
    </div>
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            SYMBOL
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            {{ $rune->symbol }}
        </dd>
    </div>
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            DECIMAL
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            {{ $rune->decimal }}
        </dd>
    </div>
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            TOTAL SUPPLY
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            {{ Number::forHumans($rune->supply, precision: 1) }}
        </dd>
    </div>
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            BURNED
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            {{ Number::forHumans($rune->burned, precision: 0) }}
        </dd>
    </div>
    @if(Cache::has('holder_count'))
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            HOLDERS
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            {{ Cache::get('holder_count') }}
        </dd>
    </div>
    @endif
    @if(Cache::has('floor_price'))
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            FLOOR PRICE
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            {{ Number::format(Cache::get('floor_price'), precision: 12) }} {{ Str::of('sats')->append('/')->append($rune->symbol) }}
        </dd>
    </div>
    @endif
    @if(Cache::has('market_cap'))
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            MARKET CAP
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            {{ Number::format(Cache::get('market_cap'), precision: 2) }} BTC
            @if(Cache::has('bitcoin_price'))
                / {{ Number::currency(Cache::get('bitcoin_price') * Cache::get('market_cap'), in: 'USD') }}
            @endif
        </dd>
    </div>
    @endif
    @if(Cache::has('bitcoin_price'))
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            BITCOIN PRICE
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            {{ Number::currency(Cache::get('bitcoin_price'), in: 'USD') }}
        </dd>
    </div>
    @endif
</dl>
