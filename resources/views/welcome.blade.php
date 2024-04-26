
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('rune.ticker') }}</title>
    <meta property="og:site_name" content="{{ config('rune.ticker') }}">
    <meta property="og:description" content="Pepe on Bitcoin Runes | The ticker is {{ config('rune.ticker') }}  | Community Run">

    <x-twitter-card/>
    <x-favicons/>
    <x-css-and-fonts/>

    <script src="https://cdn.usefathom.com/script.js" data-site="DIUZIVZB" defer></script>
</head>
<body>

<div class="bg-slate-950">
    <main>
        <div class="relative isolate overflow-hidden">
            <canvas id="matrix" class="absolute -z-10 h-full w-full" aria-hidden="true"></canvas>
            <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-40 lg:flex lg:px-8 lg:pt-40">
                <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
                    <x-icon-bitcoin class="h-11 fill-red-600" />
                    <h1 class="mt-10 text-2xl font-bold tracking-tight text-white sm:text-4xl">

                        {{ config('rune.ticker') }}
                    </h1>
                    <div class="mt-10 flex items-center gap-x-6 text-slate-300">
                        <x-social-links/>
                    </div>
                </div>
                <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
                    <div class="rounded-2xl bg-slate-900 p-2">
                        <img src="{{ secure_url('images/bitcoin-pepe-matrix.gif') }}" alt="{{ config('rune.ticker') }}" width="240" height="240" class="w-[16rem] rounded-md bg-white/5 shadow-2xl ring-1 ring-white/10">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="mt-16 sm:mt-20 xl:mx-auto xl:max-w-7xl xl:px-8">
        <x-marketplaces/>
    </div>

    <div class="mt-16 sm:mt-20 xl:mx-auto xl:max-w-7xl xl:px-8">
        <x-rune-specs/>
    </div>

    <footer aria-labelledby="footer-heading" class="relative">
        <h2 id="footer-heading" class="sr-only">Footer</h2>
        <div class="mx-auto max-w-7xl px-6 pb-8 pt-4 lg:px-8">
            <div class="border-t border-white/10 pt-8 md:flex md:items-center md:justify-between">
                <div class="flex space-x-6 md:order-2 text-gray-400">
                    <x-social-links/>
                    <x-email-link/>
                </div>
                <p class="flex mt-8 text-xs leading-5 text-gray-400 md:order-1 md:mt-0">
                    &copy; 2024 {{ config('rune.ticker') }}. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</div>

@vite('resources/js/app.js')

</html>
