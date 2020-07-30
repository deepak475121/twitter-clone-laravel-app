<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        {{-- @auth
            <form action="/logout" method="post">
                @csrf
                <button type="submit">Logout</button>
            </form>
            @else
            <header>
                <h1 class="px-8">Twitter</h1>
            </header>
        @endauth --}}

        <main class="">
            <div class="container">
                <div class="flex mx-8 h-full">
                    <div class="w-48">Nav Bar</div>
                    <div class="flex-1">@yield('content')</div>
                    <div class="">Following</div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
