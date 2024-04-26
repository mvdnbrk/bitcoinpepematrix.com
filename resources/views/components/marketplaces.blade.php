<div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:max-w-none">
        <h2 class="text-lg font-semibold leading-8 text-slate-400">
            marketplaces to trade your most favorite rune
        </h2>
        <div class="mx-auto mt-6 grid grid-cols-4 items-start gap-x-8 gap-y-10 sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:grid-cols-3 text-slate-200">
            <a
                href="{{ config('marketplaces.magiceden') }}"
                class="col-span-2 max-h-12 w-full object-contain object-left lg:col-span-1 hover:text-slate-300"
                target="_blank"
                rel="noopener"
            >
                <x-icon-magiceden class="h-6"/>
            </a>
            <a
                href="{{ config('marketplaces.unisat') }}"
                class="col-span-2 max-h-12 w-full object-contain object-left lg:col-span-1 hover:text-slate-300"
                target="_blank"
                rel="noopener"
            >
                <x-icon-unisat class="h-6"/>
            </a>
            <a
                href="{{ config('marketplaces.okx') }}"
                class="col-span-2 max-h-12 w-full object-contain object-left lg:col-span-1 hover:text-slate-300"
                target="_blank"
                rel="noopener"
            >
                <x-icon-okx class="h-6"/>
            </a>
        </div>
    </div>
</div>
