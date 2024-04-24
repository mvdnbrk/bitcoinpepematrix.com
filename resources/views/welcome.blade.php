
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <meta property="og:site_name" content="{{ config('app.name') }}">

    <x-twitter-card/>
    <x-favicons/>
    <x-css-and-fonts/>

    <script src="https://cdn.usefathom.com/script.js" data-site="DIUZIVZB" defer></script>
</head>
<body>

    <canvas id="matrix" class="absolute z-0"></canvas>

    <div class="antialiased opacity-80">
        <section class="h-screen relative z-10 overflow-hidden bg-gradient-to-b from-black to-slate-900 flex flex-col justify-center">

            <div class="w-full max-w-2xl mx-auto px-4 sm:px-6 md:px-8 relative z-20 flex align-middle mb-3">
                <div class="p-2 bg-slate-950 border-t border-gray-700 shadow rounded-xl space-y-2 text-slate-200">
                    <img src="{{ secure_url('images/bitcoin-pepe-matrix.gif') }}" alt="Bitcoin Pepe Matrix" class="h-full w-fit max-w-full rounded-xl" width="240" height="240">
                    <p class="font-semibold py-2 text-xl">
                        {{ config('rune.ticker') }}
                    </p>
                </div>
            </div>

            <div class="mt-6 w-full max-w-2xl text-sm mx-auto flex px-4 sm:px-6 md:px-8 text-slate-400">
                <div class="p-2 flex w-full">
                    <x-social-links/>
                </div>
            </div>

            <div class="mt-2 w-full max-w-2xl text-sm mx-auto flex px-4 sm:px-6 md:px-8 text-slate-400">
                <div class="p-2 flex w-full">
                    <x-rune-specs/>
                </div>
            </div>

            <div class="mt-4 w-full max-w-2xl text-sm mx-auto flex px-4 sm:px-6 md:px-8 text-white">
                <div class="p-2 flex w-full">
                    <x-marketplaces/>
                </div>
            </div>

            <div class="w-full max-w-2xl text-sm mx-auto flex px-4 sm:px-6 md:px-8 text-white">
                <div class="p-2 flex w-full">
                    <a
                        href="https://www.ord.io/runes/BITCOIN%E2%80%A2PEPE%E2%80%A2MATRIX"
                        class="hover:text-slate-300"
                        target="_blank"
                        rel="noopener"
                    >
                            view on ord.io
                    </a>
                    <a
                        href="https://luminex.io/rune/BITCOIN%E2%80%A2PEPE%E2%80%A2MATRIX"
                        class="pl-6 hover:text-slate-300"
                        target="_blank"
                        rel="noopener"
                    >
                            view on luminex.io
                    </a>
            </div>
            </div>

            <div class="w-full max-w-2xl text-sm mx-auto px-4 sm:px-6 md:px-8 text-slate-500">
                <div class="p-2 w-full flex items-center">
                    Pepe on <span class="sr-only">Bitcoin</span> <x-icon-bitcoin class="mx-2 w-4 h-4" /> Runes
                    <span class="px-4">|</span>
                    Community
                    <span class="px-4">|</span>
                    Built with <span class="sr-only">love</span> <x-icon-heart class="mx-2 w-4 h-4" />
                </div>
            </div>

        </section>
    </div>

    @vite('resources/js/app.js')

    </body>
</html>
