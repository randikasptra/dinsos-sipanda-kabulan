<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login SIPANDAKABULAN</title>
  @vite('resources/css/app.css') {{-- Laravel Vite (jika dipakai) --}}
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-sky-400 via-sky-200 to-sky-400 flex items-center justify-center px-4 py-10">

  <div class="w-full max-w-4xl grid md:grid-cols-2 gap-10 items-center">
    {{-- Kiri: Logo dan Info --}}
    <div class="text-center md:text-left space-y-4">
      <img src="{{ asset('assets/img/Logo KLA.png') }}" alt="Logo KLA" class="w-24 mx-auto md:mx-0 mb-2 drop-shadow-lg">
      <h1 class="text-lg md:text-xl font-extrabold text-gray-800 leading-relaxed tracking-wide">
        KEMENTERIAN <br> PEMBERDAYAAN PEREMPUAN DAN PERLINDUNGAN ANAK <br> REPUBLIK INDONESIA
      </h1>
      <p class="text-sm text-gray-700 leading-relaxed">
        Pemerintah Daerah Berkewajiban dan Bertanggung Jawab untuk melaksanakan dan mendukung kebijakan nasional dalam penyelenggaraan Perlindungan Anak melalui upaya daerah membangun <span class="font-bold text-sky-700">SIPANDAKABULAN</span>.
        <br><br>
        Pasal 21 UU No 35 Tahun 2014 tentang Perubahan Atas UU No 23 Tahun 2002 tentang Perlindungan Anak
      </p>
    </div>

    {{-- Kanan: Form Login --}}
    <div class="bg-white/90 backdrop-blur p-8 rounded-2xl shadow-xl w-full">
      <h2 class="text-2xl font-bold text-center text-gray-800 mb-6">Login SIPANDAKABULAN</h2>

      <form action="{{ route('login') }}" method="POST" class="space-y-4">
        @csrf
        <div>
          <label for="role" class="block mb-1 font-medium text-gray-700">Hak Akses</label>
          <select name="role" id="role" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500">
            <option value="operator">Operator</option>
            <option value="admin">Verifikator Administrasi</option>
          </select>
        </div>

        <div>
          <label for="email" class="block mb-1 font-medium text-gray-700">Email</label>
          <input type="email" id="email" name="email" placeholder="Masukkan email" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500">
        </div>

        <div class="relative">
          <label for="password" class="block mb-1 font-medium text-gray-700">Password</label>
          <input type="password" id="password" name="password" placeholder="Masukkan password" required
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-500">
          <button type="button" onclick="togglePassword()" class="absolute top-9 right-4 text-gray-500 text-sm">
            👁
          </button>
        </div>

        <div class="flex items-center">
          <input type="checkbox" id="remember" name="remember" class="mr-2">
          <label for="remember" class="text-sm text-gray-600">Ingat Saya</label>
        </div>

        <button type="submit"
          class="w-full bg-sky-600 hover:bg-sky-700 text-white font-semibold py-2 rounded-lg transition duration-200">
          Login
        </button>

        <div class="text-center text-sm mt-4 space-x-2">
          <a href="#" class="text-sky-700 hover:underline font-medium">Lupa Password</a> |
          <a href="#" class="text-sky-700 hover:underline font-medium">Hubungi Kami</a>
        </div>
      </form>

      <div class="text-center text-sm mt-6 space-y-2">
        <p>Juknis 2023: <a href="#" class="font-bold text-sky-600 hover:underline">download-kepmenjuknik2023</a></p>
        <p class="text-red-600 font-semibold">
          Jika mengalami masalah username atau password, silakan email ke <br> cs@evaluasikla.id
        </p>
      </div>
    </div>
  </div>

  <script>
    function togglePassword() {
      const input = document.getElementById('password');
      input.type = input.type === 'password' ? 'text' : 'password';
    }
  </script>

</body>

</html>
