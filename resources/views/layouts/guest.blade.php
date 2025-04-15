<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<header class="bg-gradient-to-b from-orange-500 to-orange-600 px-10 text-white shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="flex text-3xl font-semibold items-center">
            <a href="/">
                <img src="/storage/img/epic-slice-logo.png" alt="Epic Slice Logo" class="h-24">
            </a>
            <a href="/">
                <span class="text-orange-400">Epic</span>
                <span class="text-white">Slice</span>
                <span class="text-orange-100">Express</span>
            </a>
        </h1>

        <nav class="space-x-6">
            <a href="{{ route("menu.index")  }}"
               class="bg-white text-orange-600 px-4 py-2 rounded-md hover:bg-orange-100 font-semibold transition">Menu</a>
            @guest
                <a href="{{ route("register") }}"
                   class="bg-white text-orange-600 px-4 py-2 rounded-md hover:bg-orange-100 font-semibold transition">Register</a>
                <a href="{{ route("login") }}"
                   class="bg-white text-orange-600 px-4 py-2 rounded-md hover:bg-orange-100 font-semibold transition">Login</a>
            @endguest
            @auth
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit"
                            class="bg-white text-orange-600 px-4 py-2 rounded-md hover:bg-orange-100 font-semibold transition">
                        Logout
                    </button>
                </form>
            @endauth
        </nav>
    </div>
</header>

<body class="bg-cover bg-center bg-no-repeat" style="background-image: url('/storage/img/background.png');">
{{ $slot }}
</body>
</html>
