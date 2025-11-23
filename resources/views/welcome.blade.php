<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Portfolio') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            /* Animasi Floating */
            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-15px); }
            }
            .animate-float {
                animation: float 6s ease-in-out infinite;
            }
            .animate-float-delayed {
                animation: float 7s ease-in-out infinite;
                animation-delay: 1s;
            }
        </style>
    </head>
    <body class="antialiased bg-gray-900 text-white min-h-screen flex flex-col selection:bg-blue-500 selection:text-white overflow-x-hidden">

        <div class="fixed inset-0 -z-10 h-full w-full bg-gradient-to-br from-blue-950 via-indigo-950 to-slate-900"></div>
        <div class="fixed top-0 left-0 -ml-20 -mt-20 w-64 h-64 md:w-96 md:h-96 rounded-full bg-blue-600 opacity-20 blur-[80px] md:blur-[100px]"></div>
        <div class="fixed bottom-0 right-0 -mr-20 -mb-20 w-64 h-64 md:w-96 md:h-96 rounded-full bg-indigo-600 opacity-20 blur-[80px] md:blur-[100px]"></div>

        <main class="flex-grow flex flex-col justify-center px-4 md:px-8 py-12 md:py-0 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center w-full max-w-7xl mx-auto">
                
                <div class="space-y-6 md:space-y-8 text-center lg:text-left order-2 lg:order-1">
                    
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-500/10 border border-blue-400/20 text-blue-300 text-xs md:text-sm font-medium animate-fade-in-up mx-auto lg:mx-0">
                        <span class="relative flex h-2 w-2 shrink-0">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        Full Stack Developer
                    </div>

                    <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold tracking-tight leading-tight">
                        Building <br class="hidden md:block">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">Digital Products</span>
                        With Passion.
                    </h1>
                    
                    <p class="text-base md:text-lg text-gray-400 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                        Saya membantu bisnis dan individu mengubah ide menjadi aplikasi web modern yang berkinerja tinggi, aman, dan nyaman digunakan.
                    </p>

                    <div class="flex justify-center lg:justify-start gap-6 md:gap-8 border-y border-white/5 py-6">
                        <div class="text-center lg:text-left">
                            <p class="text-xl md:text-2xl font-bold text-white">12+</p>
                            <p class="text-[10px] md:text-xs text-gray-500 uppercase tracking-wider">Projects</p>
                        </div>
                        <div class="text-center lg:text-left">
                            <p class="text-xl md:text-2xl font-bold text-white">2+</p>
                            <p class="text-[10px] md:text-xs text-gray-500 uppercase tracking-wider">Years Exp</p>
                        </div>
                        <div class="text-center lg:text-left">
                            <p class="text-xl md:text-2xl font-bold text-white">100%</p>
                            <p class="text-[10px] md:text-xs text-gray-500 uppercase tracking-wider">Satisfaction</p>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-2">
                        <a href="{{ route('register') }}" class="w-full sm:w-auto px-8 py-4 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-xl shadow-lg shadow-blue-500/30 transition-all transform hover:scale-105 flex items-center justify-center gap-2">
                            Explore Portfolio                    
                        </a>
                        <a href="{{ route('login') }}" class="w-full sm:w-auto px-8 py-4 bg-white/5 hover:bg-white/10 border border-white/10 text-white font-semibold rounded-xl backdrop-blur-sm transition-all text-center">
                            Contact Me
                        </a>
                    </div>
                </div>

                <div class="hidden lg:block relative perspective-1000 order-1 lg:order-2 h-[400px] md:h-[500px]">
                    <div class="relative w-full h-full flex items-center justify-center">
                        
                        <div class="absolute top-0 right-0 w-64 h-80 md:w-80 md:h-96 bg-slate-800 rounded-2xl border border-white/10 shadow-2xl transform rotate-6 opacity-60 translate-x-6 translate-y-6 md:translate-x-10 md:translate-y-10"></div>

                        <div class="absolute z-10 w-80 md:w-96 h-auto bg-gray-900/80 backdrop-blur-xl border border-white/10 rounded-2xl shadow-2xl p-4 md:p-6 animate-float">
                            <div class="flex items-center justify-between mb-6">
                                <div class="flex gap-2">
                                    <div class="w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-red-500"></div>
                                    <div class="w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-yellow-500"></div>
                                    <div class="w-2.5 h-2.5 md:w-3 md:h-3 rounded-full bg-green-500"></div>
                                </div>
                                <div class="px-2 md:px-3 py-1 rounded-full bg-white/5 text-[10px] text-gray-400">ferdi.dev/portfolio</div>
                            </div>

                            <div class="space-y-4">
                                <div class="flex gap-3 md:gap-4">
                                    <div class="w-1/2 h-24 md:h-32 rounded-xl bg-gradient-to-br from-blue-600 to-indigo-900"></div>
                                    <div class="w-1/2 h-24 md:h-32 rounded-xl bg-gradient-to-br from-emerald-600 to-teal-900"></div>
                                </div>
                                <div class="h-3 md:h-4 w-3/4 bg-white/10 rounded-full"></div>
                                <div class="h-3 md:h-4 w-1/2 bg-white/10 rounded-full"></div>
                                <div class="flex gap-2 pt-2">
                                    <div class="h-6 md:h-8 w-16 md:w-20 bg-blue-600/20 rounded-lg border border-blue-500/30"></div>
                                    <div class="h-6 md:h-8 w-16 md:w-20 bg-white/5 rounded-lg border border-white/10"></div>
                                </div>
                            </div>
                        </div>

                        <div class="absolute z-20 bottom-8 md:bottom-12 -left-4 md:-left-8 w-40 md:w-48 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-3 md:p-4 shadow-xl animate-float-delayed">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="p-1.5 md:p-2 bg-green-500/20 rounded-lg text-green-400">
                                    <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-[10px] md:text-xs text-gray-300">Project Status</p>
                                    <p class="text-xs md:text-sm font-bold text-white">Completed</p>
                                </div>
                            </div>
                            <div class="w-full bg-white/10 rounded-full h-1.5 mt-1">
                                <div class="bg-green-500 h-1.5 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>

                        <div class="absolute z-20 top-6 md:top-10 -right-0 md:-right-4 bg-slate-800/90 backdrop-blur-md border border-white/10 rounded-full py-1.5 px-3 md:py-2 md:px-4 shadow-xl flex items-center gap-3 animate-float">
                            <div class="w-6 h-6 md:w-8 md:h-8 rounded-full bg-gradient-to-tr from-purple-500 to-pink-500 flex items-center justify-center text-[10px] md:text-xs font-bold">FY</div>
                            <div>
                                <p class="text-[10px] md:text-xs font-bold text-white">Ferdi Y.</p>
                                <p class="text-[8px] md:text-[10px] text-blue-400">Developer</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </main>

    </body>
</html>