<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- Google Analytics -->
        {{-- <script>
            window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
            ga('create', 'UA-XXXXX-Y', 'auto');
            ga('send', 'pageview');
        </script>
        <script async src='https://www.google-analytics.com/analytics.js'></script> --}}
        <!-- End Google Analytics -->


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&amp;display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css', true) }}">

        <script src="{{ asset('js/app.js', true) }}" defer></script>
        
    </head>
    <body class="font-sans antialiased bg-[#1b1b1b]">
        {{-- #1b1b1b, #001e26 --}}

        {{ $slot }}
        
    </body>
</html>
