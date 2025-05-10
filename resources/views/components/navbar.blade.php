<nav class="bg-gradient-to-r from-blue-700 to-blue-900 p-2 flex justify-between items-center text-white shadow-md">
    <div class="flex items-center space-x-3">
        <img src="{{ asset('assets/img/LogoKKLA.png') }}" alt="Logo" class="w-12 drop-shadow-lg">

        <h1 class="text-xl font-bold">Evaluasi SIPANDAKABULAN</h1>
    </div>

    <div class="space-x-6 hidden md:flex">
        <a href="#" class="hover:underline">Info</a>
        <a href="#" class="hover:underline">Pengumuman</a>
        <a href="#" class="hover:underline">Tutorial</a>
        <a href="#" class="hover:underline">Dokumen</a>
        <a href="#" class="hover:underline">Kontak</a>
        <a href="#" class="bg-red-500 hover:bg-red-600 text-white py-auto px-4 rounded-full">Logout</a>
    </div>

    <div class="md:hidden flex items-center">
        <button id="menu-toggle" class="text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
</nav>

<div id="mobile-menu" class="md:hidden hidden bg-gradient-to-r from-blue-700 to-blue-900 p-4 space-y-4 text-white">
    <a href="#" class="hover:underline">Info</a>
    <a href="#" class="hover:underline">Pengumuman</a>
    <a href="#" class="hover:underline">Tutorial</a>
    <a href="#" class="hover:underline">Dokumen</a>
    <a href="#" class="hover:underline">Kontak</a>
    <a href="#" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-full">Logout</a>
</div>
