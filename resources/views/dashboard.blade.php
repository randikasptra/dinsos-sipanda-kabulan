<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard SIPANDAKABULAN</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navbar -->
    <x-navbar></x-navbar>


    <div class="bg-white p-6 rounded-lg shadow-md flex flex-col md:flex-row justify-between items-center mb-8">
        <div>
            <h2 class="text-2xl font-bold mb-2">Selamat Datang, Kabupaten Tasikmalaya!</h2>
            <p class="text-gray-600">Email: tasikmalayakabupaten@evaluasisipandakabulan.id | Tipe User: Operator</p>
        </div>
        <div class="mt-4 md:mt-0 text-center">
            <p class="text-green-600 font-bold text-lg">Evaluasi SIPANDAKABULAN sudah di Approve</p>
            <p class="text-gray-700">Nilai EM <span class="font-bold">805.2</span> | Nilai Maksimal 1000</p>
            <div class="w-48 bg-gray-300 rounded-full h-4 mt-2">
                <div class="bg-green-500 h-4 rounded-full" style="width: 80%"></div>
            </div>
        </div>
    </div>

    
    <!-- Main Content -->
    <main class="flex-1 container mx-auto p-6">
        @yield('content')
    </main>


    <!-- Footer -->
    <x-footer></x-footer>

    @stack('scripts')

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>

</html>
