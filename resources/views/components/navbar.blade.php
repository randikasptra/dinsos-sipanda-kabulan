<nav x-data="{ open: false }" class="bg-gradient-to-r from-blue-700 to-blue-900 px-4 py-3 shadow-md text-white">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center space-x-3">
            <img src="{{ asset('assets/img/LogoKKLA.png') }}" alt="Logo" class="w-10 h-10">
            <h1 class="text-lg md:text-xl font-bold tracking-wide">Evaluasi SIPANDAKABULAN</h1>
        </div>

        <!-- Menu Desktop -->
        <div class="hidden md:flex space-x-6 items-center">
            <a href="#" class="hover:underline hover:text-sky-200 transition">Info</a>
            <a href="#" class="hover:underline hover:text-sky-200 transition">Pengumuman</a>
            <a href="#" class="hover:underline hover:text-sky-200 transition">Tutorial</a>
            <a href="#" class="hover:underline hover:text-sky-200 transition">Dokumen</a>
            <a href="#" class="hover:underline hover:text-sky-200 transition">Kontak</a>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-1 px-4 rounded-full text-sm">
                    Logout
                </button>
            </form>
        </div>
    </div>

    <!-- Hamburger -->
    <button class="md:hidden focus:outline-none" @click="open = !open">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
    </div>

    <!-- Menu Mobile -->
    <div x-data="{ open: false }">
        <div x-show="open" x-transition class="md:hidden bg-blue-800 px-4 pt-4 pb-6 space-y-3 text-sm">
            <a href="#" class="block text-white hover:underline">Info</a>
            <a href="#" class="block text-white hover:underline">Pengumuman</a>
            <a href="#" class="block text-white hover:underline">Tutorial</a>
            <a href="#" class="block text-white hover:underline">Dokumen</a>
            <a href="#" class="block text-white hover:underline">Kontak</a>
            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-1 px-4 rounded-full text-sm">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>
