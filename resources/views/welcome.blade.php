<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center bg-black dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-1xl font-extralight text-white dark:text-gray-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-1xl font-extralight text-white dark:text-gray-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="bg-black py-4 flex justify-evenly items-center">
            <div>
            <h1 class="text-white px-5 py-14 flex-shrink w-auto text-5xl font-extralight">MeinMikrofon.de</h1>
            <p class="flex-shrink w-auto px-5 py-2 max-w-4xl text-white text-left text-xl font-extralight">Hier findest du alles für das perfekte Audio Setup.</p>
            </div>
            <div class="py-4">
            <img class="w-96" src="https://wallpapercave.com/wp/wp3020638.jpg" alt="bild" />
            </div>
        </div>
        <div class="bg-darker text-3xl text-white font-extralight h-screen text-center px-28 py-20">
            <h1 class="animate-pulse">
                content_incoming
            </h1>
        </div>
    </body>
</html>
