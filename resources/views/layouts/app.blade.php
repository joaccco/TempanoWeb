<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcat icon" href="/favicon.ico"> 
    {{-- AlpineJS --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Map --}}
  <link rel="stylesheet" href="/path/to/leaflet.css" />
  <script src="node_modules/leaflet/dist/leaflet.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>

  {{-- CSS Map --}}
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
  integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
  crossorigin=""/>
  <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
  integrity="sha256-o9N1jGDZrf5tS       +Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
  crossorigin=""></script>
</head>
<body>
    <div id="app">
        @livewire('navigation')
        <main>
            @yield('content')
        </main>
        @livewire('footer')
    </div>
</body>
</html>
