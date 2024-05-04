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

    <x-footer/>
</div>

@vite('resources/js/app.js')

</html>
