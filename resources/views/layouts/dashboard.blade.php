<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard SIPANDAKABULAN</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navbar -->
    <header class="bg-blue-900 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-xl font-bold">Dashboard SIPANDAKABULAN</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-1 container mx-auto p-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white text-center p-4">
        <p class="text-sm">&copy; 2025 Kabupaten Tasikmalaya | SIPANDAKABULAN</p>
    </footer>

    @stack('scripts')
</body>
</html>
