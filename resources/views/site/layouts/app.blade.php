<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! SchemaSeo::generate() !!}
    <link rel="shortcut icon" href="{{ asset('assets/app/images/favicon.png')  }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body data-barba="wrapper" class="antialiased text-gray-900 overflow-x-hidden">

    <x-app.search/>

    <main data-barba="container">
        @yield('content')
    </main>

    <x-app.to-top/>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
