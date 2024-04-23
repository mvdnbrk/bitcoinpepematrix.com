
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <meta property="og:site_name" content="{{ config('app.name') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="BITCOIN•PEPE•MATRIX">
    <meta name="twitter:site" content="@BTCPepeMatrix">
    <meta name="twitter:image" content="https://ordin-delta.vercel.app/content/6ea0f940a1386cbb146e134933ca3533c0759101a46744d0b207a283f5f57b23i0">

    <link rel="preconnect" href="https://rsms.me">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    @vite('resources/css/app.css')

    <script src="https://cdn.usefathom.com/script.js" data-site="DIUZIVZB" defer></script>
</head>
<body>

    <canvas id="matrix" class="absolute z-0"></canvas>

    <div class="antialiased opacity-80">
        <section class="h-screen relative z-10 overflow-hidden bg-gradient-to-b from-black to-slate-900 flex flex-col justify-center">

            <div class="w-full max-w-2xl mx-auto px-4 sm:px-6 md:px-8 relative z-20 flex align-middle mb-3">
                <div class="p-2 bg-slate-950 border-t border-gray-700 shadow rounded-xl space-y-2 text-slate-200">
                    <img src="https://ordin-delta.vercel.app/content/6ea0f940a1386cbb146e134933ca3533c0759101a46744d0b207a283f5f57b23i0" alt="Bitcoin Pepe Matrix" class="h-full w-fit max-w-full rounded-xl" width="240" height="240">
                    <p class="font-semibold py-2 text-xl">
                        BITCOIN•PEPE•MATRIX
                    </p>
                </div>
            </div>

            <div class="mt-6 w-full max-w-2xl text-sm mx-auto flex px-4 sm:px-6 md:px-8 text-slate-400">
                <div class="p-2 flex w-full">
                    <a
                        href="https://linktr.ee/bitcoinpepematrix"
                        class="hover:text-slate-200" target="_blank"
                        rel="noopener"
                    >
                        <span class="sr-only">Linktree</span>
                        <x-icon-linktree class="w-6 h-6" />
                    </a>
                    <a
                        href="https://twitter.com/BTCPepeMatrix"
                        class="pl-6 hover:text-slate-200"
                        target="_blank"
                        rel="noopener"
                    >
                        <span class="sr-only">Twitter / X</span>
                        <x-icon-twitter-x class="w-6 h-6" />
                    </a>
                    <a
                        href="https://t.me/bitcoinpepematrix"
                        class="pl-6 hover:text-slate-200"
                        target="_blank"
                        rel="noopener"
                    >
                        <span class="sr-only">Telegram</span>
                        <x-icon-telegram class="w-6 h-6" />
                    </a>
                </div>
            </div>

            <div class="mt-2 w-full max-w-2xl text-sm mx-auto flex px-4 sm:px-6 md:px-8 text-slate-400">
                <div class="p-2 flex w-full">
                    <dl class="divide-y divide-white/10">
                        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-white">RUNE ID</dt>
                            <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">840202:2950</dd>
                        </div>
                        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-white">DEPLOY DATE</dt>
                            <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">Apr 21 01:46 pm</dd>
                        </div>
                        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-white">MINT BLOCK</dt>
                            <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">840269 - 841420</dd>
                        </div>
                        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-white">PREMINE</dt>
                            <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">0</dd>
                        </div>
                        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-white">DECIMAL</dt>
                            <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">0</dd>
                        </div>
                        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-white">TOTAL SUPPLY</dt>
                            <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">6.9 B</dd>
                        </div>
                        <div class="px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-white">HOLDER COUNT</dt>
                            <dd class="mt-1 text-sm leading-6 text-slate-400 sm:col-span-2 sm:mt-0">~ 16600</dd>
                        </div>
                    </dl>
                </div>
            </div>

            <div class="mt-4 w-full max-w-2xl text-sm mx-auto flex px-4 sm:px-6 md:px-8 text-white">
                <div class="p-2 flex w-full">
                    <a
                        href="https://magiceden.io/runes/BITCOIN%E2%80%A2PEPE%E2%80%A2MATRIX"
                        class="hover:text-slate-300"
                        target="_blank"
                        rel="noopener"
                    >
                            trade on magic eden
                    </a>
                    <a
                        href="https://unisat.io/runes/market?tick=BITCOIN%E2%80%A2PEPE%E2%80%A2MATRIX"
                        class="pl-12 hover:text-slate-300"
                        target="_blank"
                        rel="noopener"
                    >
                            trade on unisat
                    </a>
                    <a
                        href="https://www.okx.com/nl/web3/marketplace/runes/token/BITCOIN%E2%80%A2PEPE%E2%80%A2MATRIX/840202:2950"
                        class="pl-6 hover:text-slate-300"
                        target="_blank"
                        rel="noopener"
                    >
                            trade on okx
                    </a>
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
