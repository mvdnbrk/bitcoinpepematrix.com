<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? config('rune.ticker') }}</title>
    <meta property="og:site_name" content="{{ config('rune.ticker') }}">
    <meta property="og:description" content="Pepe on Bitcoin Runes | The ticker is {{ config('rune.ticker') }}  | Community Run">

    <x-head.meta-twitter/>
    <x-head.favicons/>
    <x-head.css-fonts/>

    <script src="https://cdn.usefathom.com/script.js" data-site="DIUZIVZB" defer></script>
</head>
<body class="bg-slate-950">
    <main>
    {{ $slot }}
    </main>

    <x-footer/>

    @vite('resources/js/app.js')
</html>
