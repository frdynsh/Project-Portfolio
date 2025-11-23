<nav x-data="{ open: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 20)"
     :class="{'bg-slate-900/80 backdrop-blur-xl shadow-lg border-b border-white/5': scrolled, 'bg-transparent border-b border-transparent': !scrolled}"
     class="fixed w-full z-50 top-0 transition-all duration-300">

    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                
                <div class="shrink-0 flex items-center gap-3">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-2 group">
                        <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-emerald-500 to-cyan-600 flex items-center justify-center shadow-lg shadow-emerald-500/20 group-hover:rotate-12 transition duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-bold text-xl text-white tracking-tight leading-none group-hover:text-cyan-400 transition">
                                {{ explode(' ', Auth::user()->name)[0] }}<span class="text-emerald-400">.</span>dev
                            </span>
                            <span class="text-[10px] text-gray-400 tracking-widest uppercase">Portfolio</span>
                        </div>
                    </a>
                </div>

                <div class="hidden space-x-1 lg:ms-12 lg:flex items-center">
                    
                    <a href="{{ route('dashboard') }}" 
                       class="px-4 py-2 rounded-full text-sm font-medium transition-all duration-200 
                       {{ request()->routeIs('dashboard') ? 'bg-white/10 text-white ring-1 ring-white/20' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                       Dashboard
                    </a>

                    <a href="{{ route('about') }}" class="px-4 py-2 rounded-full text-sm font-medium transition-all duration-200 
                       {{ request()->routeIs('about') ? 'bg-white/10 text-white ring-1 ring-white/20' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                        About Me
                    </a>
                    <a href="{{ route('portfolio') }}" class="px-4 py-2 rounded-full text-sm font-medium transition-all duration-200 
                        {{ request()->routeIs('portfolio') ? 'bg-white/10 text-white ring-1 ring-white/20' : 'text-gray-400 hover:text-white hover:bg-white/5' }}">
                        Portfolio
                    </a>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <a href="https://www.linkedin.com/in/ferdi-yansah/" class="mr-4 px-5 py-2 bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-bold uppercase tracking-wider rounded-full shadow-lg shadow-emerald-500/20 transition-all transform hover:scale-105 hidden md:block">
                    Hire Me
                </a>

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center gap-3 px-2 py-1.5 border border-transparent text-sm leading-4 font-medium rounded-full text-gray-300 hover:text-white bg-white/5 hover:bg-white/10 focus:outline-none transition ease-in-out duration-150 border-white/5">
                            
                            @if (Auth::user()->photo)
                                <img src="{{ asset('storage/photos/' . Auth::user()->photo) }}" class="w-8 h-8 rounded-full object-cover border border-white/20">
                            @else
                                <div class="w-8 h-8 rounded-full bg-gradient-to-br from-gray-600 to-gray-800 flex items-center justify-center text-xs text-white font-bold border border-white/20">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                            @endif
                            
                            <span class="pr-2 hidden md:block">{{ Auth::user()->name }}</span>
                            
                            <svg class="fill-current h-4 w-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Edit Profile') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" class="text-red-600"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-lg text-gray-400 hover:text-white hover:bg-white/10 focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-slate-900/95 backdrop-blur-xl border-t border-white/10 shadow-2xl absolute w-full">
        <div class="pt-2 pb-3 space-y-1 px-2">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-gray-300 hover:text-white hover:bg-white/5">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            
            <a href="#" class="block w-full ps-3 pe-4 py-3 border-l-4 border-transparent text-base font-medium text-gray-400 hover:text-white hover:bg-white/5 hover:border-emerald-500 rounded-r-md transition duration-150 ease-in-out">
                About Me
            </a>
            <a href="#" class="block w-full ps-3 pe-4 py-3 border-l-4 border-transparent text-base font-medium text-gray-400 hover:text-white hover:bg-white/5 hover:border-emerald-500 rounded-r-md transition duration-150 ease-in-out">
                Portfolio Project
            </a>
        </div>

        <div class="pt-4 pb-4 border-t border-white/10 bg-black/20">
            <div class="px-4 flex items-center gap-3">
                @if (Auth::user()->photo)
                    <img src="{{ asset('storage/photos/' . Auth::user()->photo) }}" class="w-10 h-10 rounded-full object-cover border-2 border-emerald-500">
                @else
                    <div class="w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center text-lg text-white font-bold">
                        {{ substr(Auth::user()->name, 0, 1) }}
                    </div>
                @endif
                <div>
                    <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-400">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1 px-2">
                <x-responsive-nav-link :href="route('profile.edit')" class="text-gray-300 hover:text-white hover:bg-white/5">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" class="text-red-400 hover:text-red-300 hover:bg-red-500/10"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>