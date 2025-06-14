<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UMKM Sangatta</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:500" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

    </head>
    <body class="bg-[#fafafa] flex lg:p-8 items-center lg:justify-between min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
                <nav class=" flex items-center p-5 justify-between gap-4" style="border-radius:5px">
                    <div class="items-center flex justify-left">
                        <x-application-logo class="w-8 h-8 text-gray-500"/>
                        <a class="font-bold text-xl" href="/" >UMKM Sangatta</a>
                    </div>
                    <div class="justify-end">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            Dashboard
                        </a>
                        @else
                        <a href="{{ route('login') }}" class="inline-block px-5 py-1.5 text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                            Masuk
                        </a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            Daftar
                        </a>
                        @endif
                        @endauth
                    </div>
                </nav>
            @endif
        </header>
    
        <section class="drop-shadow-xl hero w-full h-full flex flex-col lg:flex-row items-center" id="home">
            <div class="hero-content text-center lg:text-left lg:w-1/2 p-4">
                <h1 class="text-5xl">Selamat datang di UMKM Sangatta</h1>
                <p class="mt-4 text-gray-800">Jelajahi beragam produk UMKM dari daerah Sangatta</p>
                <a href="/login" class="btn inline-flex items-center px-4 py-2 mt-8 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" style="border-radius: 5px">Mulai</a>
            </div>

            <div class="lg:w-1/2">
                <img src="{{ asset('img/hero.png') }}"  class="drop-shadow-xl w-full h-auto object-cover drop-shadow-xs">
            </div>
        </section>
    
        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
    
</html>
