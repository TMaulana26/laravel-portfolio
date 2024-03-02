<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Taufik M')</title>
    <link rel="stylesheet" href="{{secure_asset ('./build/assets/app-BvQDANkY.css')}}">
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @livewireStyles
</head>

<body>
    <header>
        <div class="bg-black">
            @livewire('navbar')
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-950 text-white">
        @livewire('footer')
    </footer>

    @livewireScripts
    {{-- @vite('resources/js/app.js') --}}
    <script type="module" src="{{ secure_asset('./build/assets/app-TzMzxr23.js') }}"></script>
</body>

</html>