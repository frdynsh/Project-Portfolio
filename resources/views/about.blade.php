<x-app-layout>

    <div class="relative py-20 min-h-screen overflow-hidden">
        
        <div class="fixed inset-0 -z-10 h-full w-full bg-gradient-to-br from-slate-900 via-blue-950 to-gray-900"></div>
        <div class="fixed top-20 right-0 w-96 h-96 rounded-full bg-purple-600/20 blur-[120px]"></div>
        <div class="fixed bottom-0 left-0 w-96 h-96 rounded-full bg-blue-600/20 blur-[120px]"></div>

        <div class="max-w-7xl mx-auto py-8 px-6 lg:px-8 relative z-10">
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-24">
                <div class="space-y-6">
                    <div class="inline-block px-4 py-1 rounded-full bg-blue-500/10 border border-blue-400/20 text-blue-300 text-sm font-medium tracking-widest uppercase">
                        Who Am I?
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold text-white leading-tight">
                        Membangun Solusi Digital dengan <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-emerald-400">Kode & Kreativitas.</span>
                    </h1>
                    <p class="text-lg text-gray-400 leading-relaxed">
                        Halo! Saya <strong class="text-white">{{ Auth::user()->name }}</strong>, seorang mahasiswa Teknik Informatika yang memiliki passion mendalam di dunia Full Stack Web Development. 
                        <br><br>
                        Saya percaya bahwa kode bukan hanya sekadar baris instruksi, tapi cara untuk memecahkan masalah nyata. Saat ini saya fokus mendalami ekosistem Laravel dan Modern JavaScript untuk membangun aplikasi yang skalabel dan user-friendly.
                    </p>
                    
                    <div class="flex gap-4 pt-4">
                        <a href="#" class="p-3 rounded-full bg-white/5 hover:bg-white/10 border border-white/10 hover:border-blue-400 transition text-gray-400 hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                        <a href="#" class="p-3 rounded-full bg-white/5 hover:bg-white/10 border border-white/10 hover:border-blue-400 transition text-gray-400 hover:text-white">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-purple-600 rounded-2xl blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200"></div>
                    <div class="relative rounded-2xl bg-gray-900 border border-white/10 p-6 ring-1 ring-white/5">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex space-x-2">
                                <div class="w-3 h-3 rounded-full bg-red-500"></div>
                                <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                                <div class="w-3 h-3 rounded-full bg-green-500"></div>
                            </div>
                            <div class="text-xs text-gray-500 font-mono">Bio.json</div>
                        </div>
                        <div class="font-mono text-sm leading-relaxed">
                            <div class="text-purple-400">const <span class="text-yellow-300">developer</span> = {</div>
                            <div class="pl-4 text-blue-300">name: <span class="text-green-400">'{{ Auth::user()->name }}'</span>,</div>
                            <div class="pl-4 text-blue-300">role: <span class="text-green-400">'Full Stack Student'</span>,</div>
                            <div class="pl-4 text-blue-300">location: <span class="text-green-400">'Indonesia'</span>,</div>
                            <div class="pl-4 text-blue-300">hobbies: [</div>
                            <div class="pl-8 text-orange-300">'Coding', 'Coffee', 'Gaming'</div>
                            <div class="pl-4 text-blue-300">],</div>
                            <div class="pl-4 text-blue-300">status: <span class="text-green-400">'Open to Work'</span></div>
                            <div class="text-purple-400">};</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-y-12">
                <h2 class="text-3xl font-bold text-white text-center">My Journey</h2>
                
                <div class="relative border-l border-gray-700 ml-4 md:ml-6 space-y-12">
                    
                    <div class="relative pl-8 md:pl-12">
                        <span class="absolute -left-[5px] top-2 h-3 w-3 rounded-full bg-blue-500 ring-4 ring-gray-900"></span>
                        <span class="text-sm text-blue-400 font-mono mb-1 block">2023 - Present</span>
                        <h3 class="text-xl font-bold text-white">Mahasiswa Teknik Informatika</h3>
                        <p class="text-gray-400 text-sm mb-2">Universitas Singaperbangsa Karawang</p>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Fokus pada pengembangan perangkat lunak, algoritma, dan basis data. Aktif dalam praktikum Pemrograman Web dan basis data MySQL.
                        </p>
                    </div>

                    <div class="relative pl-8 md:pl-12">
                        <span class="absolute -left-[5px] top-2 h-3 w-3 rounded-full bg-gray-600 ring-4 ring-gray-900"></span>
                        <span class="text-sm text-gray-500 font-mono mb-1 block">2020 - 2023</span>
                        <h3 class="text-xl font-bold text-gray-300">SMA Negeri 1 Susukan Cirebon</h3>
                        <p class="text-gray-500 text-sm mb-2">Jurusan IPA</p>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            Membangun fondasi logika matematika dan pemecahan masalah. Mulai belajar dasar-dasar HTML dan CSS secara otodidak.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>