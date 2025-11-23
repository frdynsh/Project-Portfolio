<x-app-layout>

    <div class="relative py-20 min-h-screen flex items-center justify-center overflow-hidden">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative z-10 w-full">
            
            @if (session('status'))
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" 
                     class="absolute top-0 right-4 lg:right-0 z-50 bg-emerald-500/20 border border-emerald-500/50 text-emerald-200 px-4 py-2 rounded-full text-sm flex items-center gap-2 backdrop-blur-md shadow-lg animate-fade-in-down">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    {{ session('status') }}
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                
                <div class="lg:col-span-7 space-y-8 order-2 lg:order-1 text-center lg:text-left">
                    
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-500/10 border border-blue-400/20 text-blue-300 text-xs font-bold uppercase tracking-widest">
                        <span class="relative flex h-2 w-2">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        Open for Collaboration
                    </div>

                    <div class="space-y-2">
                        <h2 class="text-lg text-gray-400 font-medium">Hello, I'm</h2>
                        <h1 class="text-5xl lg:text-7xl font-bold text-white tracking-tight leading-tight">
                            {{ explode(' ', Auth::user()->name)[0] }} <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-500">{{ count(explode(' ', Auth::user()->name)) > 1 ? explode(' ', Auth::user()->name)[1] : '' }}</span>
                        </h1>
                        <p class="text-xl text-gray-400 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                            Seorang <span class="text-white font-semibold">Mahasiswa Informatika</span> yang berfokus pada pengembangan web modern. Saat ini sedang mendalami Laravel 12 dan arsitektur sistem yang skalabel.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-8">
                        <div class="p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition duration-300 group">
                            <div class="text-gray-500 text-xs uppercase tracking-wider mb-1 group-hover:text-blue-400 transition">Student ID</div>
                            <div class="text-lg font-mono text-white font-bold tracking-wide">
                                {{ Auth::user()->npm ?? 'Not Set' }}
                            </div>
                        </div>

                        <div class="p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition duration-300 group">
                            <div class="text-gray-500 text-xs uppercase tracking-wider mb-1 group-hover:text-purple-400 transition">Class</div>
                            <div class="text-lg text-white font-bold">
                                {{ Auth::user()->kelas ?? 'Not Set' }}
                            </div>
                        </div>

                        <div class="p-4 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition duration-300 group">
                            <div class="text-gray-500 text-xs uppercase tracking-wider mb-1 group-hover:text-emerald-400 transition">Current Focus</div>
                            <div class="text-lg text-white font-bold truncate" title="{{ Auth::user()->mata_kuliah }}">
                                {{ Auth::user()->mata_kuliah ?? 'Not Set' }}
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-4 justify-center lg:justify-start pt-4">
                        <a href="{{ asset('pdf/CV_Ferdi Yansah.pdf') }}" download="CV_Ferdi_Yansah.pdf" target="_blank" class="px-8 py-3 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-xl shadow-lg shadow-blue-600/20 transition-all transform hover:translate-y-[-2px]">
                            Download CV
                        </a>
                        <a href="{{ route('portfolio') }}" class="px-8 py-3 bg-transparent border border-white/20 hover:bg-white/5 text-white font-semibold rounded-xl transition-all">
                            View Portfolio
                        </a>
                    </div>

                </div>

                <div class="lg:col-span-5 order-1 lg:order-2 flex justify-center lg:justify-end relative">
                    
                    <div class="absolute top-10 right-10 w-64 h-64 bg-gradient-to-tr from-blue-500 to-purple-500 rounded-full blur-[80px] opacity-40 -z-10"></div>

                    <form id="photoForm" action="{{ route('profile.photo.update') }}" method="POST" enctype="multipart/form-data" class="relative group cursor-pointer">
                        @csrf
                        @method('PATCH')

                        <div class="relative w-64 h-64 lg:w-80 lg:h-80 rounded-3xl overflow-hidden border-2 border-white/10 shadow-2xl rotate-3 group-hover:rotate-0 transition-all duration-500 ease-out bg-slate-800">
                            
                            @if (Auth::user()->photo)
                                <img id="photoPreview" src="{{ asset('storage/photos/' . Auth::user()->photo) }}" class="w-full h-full object-cover scale-105 group-hover:scale-100 transition duration-500" alt="Profile">
                            @else
                                <div id="initialPlaceholder" class="w-full h-full flex items-center justify-center bg-gradient-to-br from-slate-700 to-slate-900 text-8xl font-bold text-white/20">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                                <img id="photoPreview" src="" class="w-full h-full object-cover hidden" alt="Preview">
                            @endif
                        </div>

                        <div class="absolute -bottom-6 -left-6 bg-gray-900/80 backdrop-blur-xl border border-white/10 p-4 rounded-2xl shadow-xl transform group-hover:translate-y-2 transition duration-500 hidden sm:block">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-green-500/20 flex items-center justify-center text-green-400">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <div>
                                    <p class="text-xs text-gray-400 uppercase font-bold">Experience</p>
                                    <p class="text-white font-bold">Junior Level</p>
                                </div>
                            </div>
                        </div>

                        <input type="file" name="photo" id="photoInput" class="hidden" onchange="previewImage(this)">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script>
        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('initialPlaceholder')?.classList.add('hidden');
                    let img = document.getElementById('photoPreview');
                    img.src = e.target.result;
                    img.classList.remove('hidden');
                    
                    if(confirm('Apakah Anda ingin menyimpan foto profil ini?')) {
                         document.getElementById('photoForm').submit();
                    }
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</x-app-layout>