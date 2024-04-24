<dl class="divide-y divide-white/10">
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            RUNE ID
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            {{ config('rune.id') }}
        </dd>
    </div>
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            DEPLOY DATE
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            {{ config('rune.deploy_date') }}
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
            {{ config('rune.premine') }}
        </dd>
    </div>
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            DECIMAL
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            {{ config('rune.decimal') }}
        </dd>
    </div>
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            TOTAL SUPPLY
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            {{ config('rune.total_supply') }}
        </dd>
    </div>
    <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-white">
            HOLDER COUNT
        </dt>
        <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">
            ~ {{ config('rune.approx_holder_count') }}
        </dd>
    </div>
</dl>
