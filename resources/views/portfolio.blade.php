<x-app-layout>
 
    <div class="relative py-24 min-h-screen w-full overflow-hidden">
        
        <div class="fixed inset-0 -z-10 h-full w-full bg-gradient-to-br from-blue-950 via-indigo-950 to-slate-900"></div>
        <div class="fixed top-0 left-0 -ml-20 -mt-20 w-96 h-96 rounded-full bg-blue-600 opacity-20 blur-[100px]"></div>
        <div class="fixed bottom-0 right-0 -mr-20 -mb-20 w-96 h-96 rounded-full bg-indigo-600 opacity-20 blur-[100px]"></div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10 w-full">
            
            <div class="text-center max-w-2xl mx-auto mb-20">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-500/10 border border-blue-400/20 text-blue-300 text-xs font-bold uppercase tracking-widest mb-4">
                    <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                    My Latest Work
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6 tracking-tight">
                    Featured <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Projects</span>
                </h1>
                <p class="text-gray-400 text-lg leading-relaxed">
                    Koleksi hasil karya pengembangan web dan aplikasi yang telah saya kerjakan dengan standar industri modern.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 w-full">
                
                <div class="group relative bg-white/5 backdrop-blur-md border border-white/10 rounded-3xl overflow-hidden hover:border-blue-500/50 hover:bg-white/10 transition-all duration-500 flex flex-col h-full">
                    
                    <div class="h-60 bg-gradient-to-br from-slate-800 to-slate-900 relative overflow-hidden group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-20 h-20 rounded-2xl bg-gradient-to-tr from-blue-600 to-indigo-600 flex items-center justify-center shadow-2xl shadow-blue-500/20 group-hover:rotate-6 transition duration-500">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition duration-500"></div>
                    </div>
                    
                    <div class="p-8 flex flex-col flex-1">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-2xl font-bold text-white group-hover:text-blue-400 transition">Balikin Kampus</h3>
                            <a href="https://github.com/frdynsh/Projek-Balikin" class="p-2 rounded-full bg-white/5 hover:bg-white/20 text-gray-400 hover:text-white transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>
                        
                        <p class="text-gray-400 text-sm mb-6 leading-relaxed line-clamp-3">
                            Platform Lost & Found digital untuk warga kampus. Membantu mahasiswa menemukan barang yang hilang serta melaporkan barang temuan secara <i>real-time</i> dan terintegrasi.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mt-auto">
                            <span class="px-3 py-1 text-xs font-medium rounded-lg bg-red-500/10 text-red-300 border border-red-500/20">Laravel 12</span>
                            <span class="px-3 py-1 text-xs font-medium rounded-lg bg-sky-500/10 text-sky-300 border border-sky-500/20">Mapbox API</span>
                            <span class="px-3 py-1 text-xs font-medium rounded-lg bg-orange-500/10 text-orange-300 border border-orange-500/20">MySQL</span>
                        </div>
                    </div>
                </div>

                <div class="group relative bg-white/5 backdrop-blur-md border border-white/10 rounded-3xl overflow-hidden hover:border-emerald-500/50 hover:bg-white/10 transition-all duration-500 flex flex-col h-full">
                    
                    <div class="h-60 bg-gradient-to-br from-slate-800 to-slate-900 relative overflow-hidden group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-20 h-20 rounded-2xl bg-gradient-to-tr from-emerald-600 to-teal-600 flex items-center justify-center shadow-2xl shadow-emerald-500/20 group-hover:rotate-6 transition duration-500">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition duration-500"></div>
                    </div>
                    
                    <div class="p-8 flex flex-col flex-1">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-2xl font-bold text-white group-hover:text-emerald-400 transition">Personal Portfolio</h3>
                            <a href="https://github.com/frdynsh/Project-Portfolio.git" class="p-2 rounded-full bg-white/5 hover:bg-white/20 text-gray-400 hover:text-white transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>
                        
                        <p class="text-gray-400 text-sm mb-6 leading-relaxed line-clamp-3">
                            Website profil pribadi yang dibangun dengan desain modern glassmorphism, routing dinamis, dan optimasi performa tinggi.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mt-auto">
                            <span class="px-3 py-1 text-xs font-medium rounded-lg bg-emerald-500/10 text-emerald-300 border border-emerald-500/20">Laravel</span>
                            <span class="px-3 py-1 text-xs font-medium rounded-lg bg-teal-500/10 text-teal-300 border border-teal-500/20">Blade</span>
                            <span class="px-3 py-1 text-xs font-medium rounded-lg bg-gray-500/10 text-gray-300 border border-gray-500/20">Alpine.js</span>
                        </div>
                    </div>
                </div>

                <div class="group relative bg-white/5 backdrop-blur-md border border-white/10 rounded-3xl overflow-hidden hover:border-purple-500/50 hover:bg-white/10 transition-all duration-500 flex flex-col h-full">
                    
                    <div class="h-60 bg-gradient-to-br from-slate-800 to-slate-900 relative overflow-hidden group-hover:scale-105 transition duration-700">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-20 h-20 rounded-2xl bg-gradient-to-tr from-purple-600 to-pink-600 flex items-center justify-center shadow-2xl shadow-purple-500/20 group-hover:rotate-6 transition duration-500">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                            </div>
                        </div>
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition duration-500"></div>
                    </div>
                    
                    <div class="p-8 flex flex-col flex-1">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-2xl font-bold text-white group-hover:text-purple-400 transition">Juragan Tulang Rangu</h3>
                            <a href="https://github.com/frdynsh/projek-umkm" class="p-2 rounded-full bg-white/5 hover:bg-white/20 text-gray-400 hover:text-white transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            </a>
                        </div>
                        
                        <p class="text-gray-400 text-sm mb-6 leading-relaxed line-clamp-3">
                            Website E-Commerce Full Stack untuk pemesanan kuliner khas Karawang. Dilengkapi fitur manajemen user, metode pembayaran (Cash/Online), dan katalog menu interaktif.
                        </p>
                        
                        <div class="flex flex-wrap gap-2 mt-auto">
                            <span class="px-3 py-1 text-xs font-medium rounded-lg bg-purple-500/10 text-purple-300 border border-purple-500/20">Native PHP</span>
                            <span class="px-3 py-1 text-xs font-medium rounded-lg bg-indigo-500/10 text-indigo-300 border border-indigo-500/20">Bootstrap 5</span>
                            <span class="px-3 py-1 text-xs font-medium rounded-lg bg-orange-500/10 text-orange-300 border border-orange-500/20">MySQL</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>