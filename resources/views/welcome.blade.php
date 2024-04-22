
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <meta property="og:site_name" content="{{ config('app.name') }}">

    <link rel="preconnect" href="https://rsms.me">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    @vite('resources/css/app.css')

    <script src="https://cdn.usefathom.com/script.js" data-site="DIUZIVZB" defer></script>
</head>
<body>
<div class="antialiased">
    <section class="h-screen relative z-10 overflow-hidden bg-gradient-to-b from-gray-900 to-gray-700 flex flex-col justify-center">

        <div class="w-full max-w-2xl mx-auto px-4 sm:px-6 md:px-8 relative z-20 flex align-middle mb-3">
            <div class="p-6 bg-gray-800 border-t border-gray-700 shadow rounded-xl space-y-2 text-gray-200">
                <img src="https://ordin-delta.vercel.app/content/6ea0f940a1386cbb146e134933ca3533c0759101a46744d0b207a283f5f57b23i0" alt="Bitcoin Pepe Matrix" class="h-full w-fit max-w-full rounded-xl" width="240" height="240">
                <p class="font-semibold leading-relaxed">
                    BITCOIN•PEPE•MATRIX
                </p>
            </div>
        </div>

        <div class="mt-4 w-full max-w-2xl text-sm mx-auto flex px-4 sm:px-6 md:px-8 text-gray-400">
            <div class="p-6 flex w-full">
                <a href="https://linktr.ee/bitcoinpepematrix"
                    class="hover:text-gray-300" target="_blank"
                    rel="noopener">
                    <span class="sr-only">Linktree</span>
                    <x-icon-linktree class="w-6 h-6" />
                </a>
                <a href="https://twitter.com/BTCPepeMatrix"
                    class="pl-6 hover:text-gray-300" target="_blank"
                    rel="noopener">
                    <span class="sr-only">Twitter / X</span>
                    <x-icon-twitter-x class="w-6 h-6" />
                </a>
                <a
                    href="https://t.me/bitcoinpepematrix"
                    class="pl-6 hover:text-gray-300"
                    target="_blank"
                    rel="noopener"
                >
                    <span class="sr-only">Telegram</span>
                    <x-icon-telegram class="w-6 h-6" />
                </a>
                <a
                    href="https://www.ord.io/runes/BITCOIN%E2%80%A2PEPE%E2%80%A2MATRIX"
                    class="pl-12 hover:text-gray-300"
                    target="_blank"
                    rel="noopener">
                        view on ord.io
                </a>
                <a
                    href="https://luminex.io/rune/BITCOIN%E2%80%A2PEPE%E2%80%A2MATRIX"
                    class="pl-12 hover:text-gray-300"
                    target="_blank"
                    rel="noopener">
                        view on lumninex.io
                </a>
            </div>
        </div>

        <div class="w-full max-w-2xl text-sm mx-auto flex align-middle px-4 sm:px-6 md:px-8 text-gray-400">
            <div class="p-6 w-full flex">
                Pepe on Runes | No Premine | 100% Minted | Community
            </div>
        </div>

    </section>
</div>
</body>
</html>
