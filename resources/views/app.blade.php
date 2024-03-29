<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Taufik M')</title>
    <link rel="stylesheet" href="{{secure_asset ('./build/app.css')}}">
    {{-- @vite("resources/css/app.css") --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @livewireStyles
</head>

<body>
    <header>
        <div>
            @livewire('navbar')
        </div>
    </header>

    <main>
        <div>
            @yield('content')
        </div>
    </main>

    <footer class="bg-gray-950 text-white">
        @livewire('footer')
    </footer>

    @livewireScripts
    {{-- @vite('resources/js/app.js') --}}
    <script type="module" src="{{ secure_asset('./build/app2.js') }}"></script>
</body>

</html>