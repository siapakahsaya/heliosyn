<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Heliosyn</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    @endif
    <style>
        /* Custom scrollbar for a more modern look */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #1a202c;
        }
        ::-webkit-scrollbar-thumb {
            background: #4a5568;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #718096;
        }
    </style>
</head>
<body>
<x-navbar brand="Heliosyn" />
<x-header/>
<x-about imageUrl="{{asset('solarpanel.avif')}}"/>

</body>
</html>
