<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-900 text-white min-h-screen flex items-center justify-center selection:bg-blue-500 selection:text-white">

        <div class="fixed inset-0 -z-10 h-full w-full bg-gradient-to-br from-blue-950 via-indigo-950 to-slate-900"></div>

        <div class="fixed top-0 left-0 -ml-20 -mt-20 w-96 h-96 rounded-full bg-blue-600 opacity-20 blur-[100px]"></div>
        <div class="fixed bottom-0 right-0 -mr-20 -mb-20 w-96 h-96 rounded-full bg-indigo-600 opacity-20 blur-[100px]"></div>

        <div class="relative w-full max-w-7xl px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <div class="space-y-8 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-500/10 border border-blue-400/20 text-blue-300 text-sm font-medium">
                        <span class="relative flex h-2 w-2">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        Sistem Informasi Akademik
                    </div>

                    <h1 class="text-5xl lg:text-7xl font-bold tracking-tight leading-tight">
                        Kelola Data <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-400">Mahasiswa</span>
                        dengan Mudah.
                    </h1>
                    
                    <p class="text-lg text-gray-400 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                        Platform terintegrasi untuk manajemen data akademik yang modern, cepat, dan aman.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mt-8">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="px-8 py-4 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-xl shadow-lg shadow-blue-500/30 transition-all transform hover:scale-105 flex items-center justify-center gap-2">
                                    Masuk ke Dashboard
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="px-8 py-4 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-xl shadow-lg shadow-blue-500/30 transition-all transform hover:scale-105 text-center">
                                    Log in
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="px-8 py-4 bg-white/10 hover:bg-white/20 border border-white/10 text-white font-semibold rounded-xl backdrop-blur-sm transition-all transform hover:scale-105 text-center">
                                        Register
                                    </a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>

                <div class="hidden lg:block relative">
                    <div class="relative rounded-2xl bg-white/5 border border-white/10 p-2 backdrop-blur-md shadow-2xl transform rotate-2 hover:rotate-0 transition duration-500">
                        <div class="rounded-xl bg-gradient-to-br from-gray-800 to-gray-900 p-6 h-[400px] flex flex-col justify-between border border-white/5">
                            
                            <div class="flex justify-between items-center mb-6">
                                <div class="flex gap-2">
                                    <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                    <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                    <div class="w-3 h-3 rounded-full bg-green-500"></div>
                                </div>
                                <div class="h-2 w-20 bg-gray-700 rounded-full"></div>
                            </div>

                            <div class="space-y-4">
                                <div class="h-8 w-3/4 bg-gray-700/50 rounded-lg animate-pulse"></div>
                                <div class="h-4 w-full bg-gray-700/30 rounded-lg animate-pulse delay-75"></div>
                                <div class="h-4 w-5/6 bg-gray-700/30 rounded-lg animate-pulse delay-100"></div>
                                
                                <div class="grid grid-cols-2 gap-4 mt-8">
                                    <div class="h-24 bg-blue-500/10 border border-blue-500/20 rounded-xl p-4">
                                        <div class="w-8 h-8 bg-blue-500/30 rounded-lg mb-2"></div>
                                        <div class="h-2 w-12 bg-gray-600 rounded"></div>
                                    </div>
                                    <div class="h-24 bg-indigo-500/10 border border-indigo-500/20 rounded-xl p-4">
                                        <div class="w-8 h-8 bg-indigo-500/30 rounded-lg mb-2"></div>
                                        <div class="h-2 w-12 bg-gray-600 rounded"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-auto pt-6 border-t border-white/5 flex justify-between items-center">
                                <div class="h-3 w-24 bg-gray-700 rounded-full"></div>
                                <div class="px-3 py-1 bg-blue-600 text-[10px] rounded-full text-white">Active</div>
                            </div>

                        </div>
                    </div>

                    <div class="absolute -bottom-6 -left-6 bg-gray-800/80 backdrop-blur-xl p-4 rounded-xl border border-white/10 shadow-xl animate-bounce" style="animation-duration: 3s;">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400">Status System</p>
                                <p class="text-sm font-bold text-white">100% Secure</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>