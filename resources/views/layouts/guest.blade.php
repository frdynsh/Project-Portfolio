<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-100 antialiased">
        
        <div class="fixed inset-0 -z-50 h-full w-full bg-gradient-to-br from-blue-950 via-indigo-950 to-slate-900"></div>
        <div class="fixed top-0 left-0 -ml-20 -mt-20 w-96 h-96 rounded-full bg-blue-600 opacity-20 blur-[100px] -z-40"></div>
        <div class="fixed bottom-0 right-0 -mr-20 -mb-20 w-96 h-96 rounded-full bg-indigo-600 opacity-20 blur-[100px] -z-40"></div>

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            
            <div class="mb-6">
                <a href="/" class="flex items-center gap-2 group">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-emerald-500 to-cyan-600 flex items-center justify-center shadow-lg group-hover:rotate-12 transition duration-300">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <span class="font-bold text-2xl tracking-tight text-white">Ferdi<span class="text-emerald-400">.dev</span></span>
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-8 py-8 bg-white/5 backdrop-blur-xl border border-white/10 shadow-2xl overflow-hidden sm:rounded-3xl relative">
                <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/10 rounded-full blur-2xl -mr-10 -mt-10 pointer-events-none"></div>
                
                {{ $slot }}
            </div>
        </div>
    </body>
</html>