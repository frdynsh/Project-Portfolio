<x-app-layout>

    <div class="relative py-24 min-h-screen w-full overflow-hidden">
        
        <div class="fixed inset-0 -z-10 h-full w-full bg-gradient-to-br from-blue-950 via-indigo-950 to-slate-900"></div>
        <div class="fixed top-0 left-0 -ml-20 -mt-20 w-96 h-96 rounded-full bg-blue-600 opacity-20 blur-[100px]"></div>
        <div class="fixed bottom-0 right-0 -mr-20 -mb-20 w-96 h-96 rounded-full bg-indigo-600 opacity-20 blur-[100px]"></div>

        <div class="max-w-4xl mx-auto px-6 lg:px-8 relative z-10">
            
            <div class="mb-8 text-center md:text-left">
                <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">Account Settings</h1>
                <p class="text-gray-400">Kelola informasi profil, keamanan, dan preferensi akun Anda.</p>
            </div>

            <div class="space-y-8">
                
                <div class="p-8 bg-white/5 backdrop-blur-md border border-white/10 rounded-3xl shadow-2xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-blue-500/10 rounded-full blur-2xl -mr-10 -mt-10"></div>
                    
                    <div class="relative z-10">
                        <h2 class="text-xl font-bold text-white mb-1">Profile Information</h2>
                        <p class="text-sm text-gray-400 mb-6">Update nama, foto profil, dan alamat email akun Anda.</p>
                        
                        <div class="max-w-xl dark-form-override">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                </div>

                <div class="p-8 bg-white/5 backdrop-blur-md border border-white/10 rounded-3xl shadow-2xl relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-purple-500/10 rounded-full blur-2xl -mr-10 -mt-10"></div>

                    <div class="relative z-10">
                        <h2 class="text-xl font-bold text-white mb-1">Security</h2>
                        <p class="text-sm text-gray-400 mb-6">Pastikan akun Anda aman dengan menggunakan password yang kuat.</p>
                        
                        <div class="max-w-xl dark-form-override">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                </div>

                <div class="p-8 bg-red-500/5 backdrop-blur-md border border-red-500/20 rounded-3xl shadow-2xl relative overflow-hidden group hover:border-red-500/40 transition duration-300">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-red-500/10 rounded-full blur-2xl -mr-10 -mt-10"></div>

                    <div class="relative z-10">
                        <h2 class="text-xl font-bold text-red-400 mb-1">Danger Zone</h2>
                        <p class="text-sm text-red-200/70 mb-6">Setelah akun dihapus, semua data akan hilang secara permanen.</p>
                        
                        <div class="max-w-xl dark-form-override">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>