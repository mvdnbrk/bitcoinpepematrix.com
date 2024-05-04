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
    {{ $slot }}
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
