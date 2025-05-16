<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login SIPANDAKABULAN</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body
    class="min-h-screen bg-gradient-to-br from-blue-400 via-blue-200 to-blue-400 flex flex-col items-center justify-center p-6">

    <img src="{{ asset('assets/img/LogoKKLA.png') }}" alt="Logo" class="w-24 mb-4 drop-shadow-lg">
    <h1 class="text-lg md:text-xl font-extrabold text-center text-gray-800 mb-6 leading-relaxed tracking-wide">
        KEMENTERIAN <br> PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK <br> REPUBLIK INDONESIA
    </h1>

    <div class="bg-white/80 backdrop-blur-md p-8 rounded-3xl shadow-xl w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Login SIPANDAKABULAN</h2>

        {{-- Session Status --}}
        @if (session('status'))
            <div class="mb-4 text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="mb-4 text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="role" class="block mb-1 font-semibold text-gray-700">Hak Akses</label>
                <select id="role" name="role" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('role')
                        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                    @enderror
                    <option value="operator">Operator</option>
                    <option value="admin">Verifikator Administrasi</option>
                </select>


            </div>

            <div>
                <label for="email" class="block mb-1 font-semibold text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="relative">
                <label for="password" class="block mb-1 font-semibold text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button type="button" onclick="togglePassword()" class="absolute top-10 right-4 text-gray-400">
                    👁
                </button>
            </div>

            <div class="flex items-center">
                <input type="checkbox" id="remember" name="remember" class="mr-2">
                <label for="remember" class="text-gray-600 text-sm">Ingat Saya</label>
            </div>

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-xl transition duration-300">
                Login
            </button>

            <div class="text-center text-sm mt-4 space-x-2">
                <a href="#" class="text-blue-700 hover:underline font-medium">Lupa Password</a> |
                <a href="#" class="text-blue-700 hover:underline font-medium">Hubungi Kami</a>
            </div>
        </form>
    </div>

    <div
        class="bg-white/80 backdrop-blur-md mt-8 p-6 rounded-2xl shadow-md w-full max-w-md text-center text-sm text-gray-700">
        <p>Juknis 2023: <a href="#" class="font-bold text-blue-600 hover:underline">download-kepmenjuknik2023</a>
        </p>
        <p class="text-red-600 font-semibold mt-4">Jika mengalami masalah username atau password, silakan email ke
            cs@evaluasikla.id</p>
    </div>

    <div
        class="bg-white/80 backdrop-blur-md mt-6 p-6 rounded-2xl shadow-md w-full max-w-3xl text-center text-gray-700 text-sm leading-relaxed">
        <strong class="block mb-3 text-gray-800 text-base">Pemerintah Daerah Berkewajiban dan Bertanggung Jawab</strong>
        Untuk melaksanakan dan mendukung kebijakan nasional dalam penyelenggaraan Perlindungan Anak melalui upaya daerah
        membangun <span class="font-bold text-blue-600">SIPANDAKABULAN</span>.<br><br>
        Pasal 21 UU No 35 Tahun 2014 tentang Perubahan Atas UU No 23 Tahun 2002 tentang Perlindungan Anak
    </div>

    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            input.type = input.type === 'password' ? 'text' : 'password';
        }
    </script>

</body>

</html>
