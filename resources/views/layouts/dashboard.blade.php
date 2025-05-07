<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Evaluasi SIPANDAKABULAN</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">


    <x-navbar></x-navbar>

    <!-- Welcome Section -->
    <section class="p-6">
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

        <!-- Section Evaluasi -->
        <section class="p-6">
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

                <!-- Card Kelembagaan -->
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition cursor-pointer">
                    <div onclick="toggleDropdown('kelembagaan')" class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-bold mb-2">Kelembagaan</h3>
                            <p class="text-gray-600 mb-1">100% | EM <span
                                    class="font-semibold text-green-600">146.00</span>
                                | Nilai Maksimal <span class="font-semibold text-gray-600">164.00</span></p>
                            <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                                <div class="bg-green-500 h-3 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                        <button
                            class="text-blue-700 hover:text-blue-900 font-bold text-2xl transform transition-transform duration-300"
                            id="icon-kelembagaan">+</button>
                    </div>
                    <div id="kelembagaan" class="hidden mt-4 space-y-4">
                        <!-- Item 1 -->
                        <div class="bg-green-100 p-4 rounded-lg">
                            <div class="font-semibold mb-2">Peraturan Daerah tentang SIPANDAKABULAN</div>
                            <div class="flex flex-col md:flex-row items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <span
                                        class="bg-blue-900 text-white text-xs font-bold py-1 px-2 rounded-full">[4/4]</span>
                                    <span
                                        class="bg-green-500 text-white text-xs font-bold py-1 px-2 rounded-full">88.00</span>
                                    <span class="bg-blue-900 text-white text-xs font-bold py-1 px-2 rounded-full">Nilai
                                        Maksimal 96.00</span>
                                </div>
                                <a href="proses-peraturandaerah.html"
                                    class="mt-2 md:mt-0 bg-sky-400 hover:bg-sky-500 text-white text-xs font-semibold py-2 px-4 rounded-full">Proses</a>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="bg-gray-100 p-4 rounded-lg">
                            <div class="font-semibold mb-2">Penguatan Kelembagaan</div>
                            <div class="flex flex-col md:flex-row items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <span
                                        class="bg-blue-900 text-white text-xs font-bold py-1 px-2 rounded-full">[7/7]</span>
                                    <span
                                        class="bg-green-500 text-white text-xs font-bold py-1 px-2 rounded-full">31.00</span>
                                    <span class="bg-blue-900 text-white text-xs font-bold py-1 px-2 rounded-full">Nilai
                                        Maksimal 36.00</span>
                                </div>
                                <a href="proses-penguatan.html"
                                    class="mt-2 md:mt-0 bg-sky-400 hover:bg-sky-500 text-white text-xs font-semibold py-2 px-4 rounded-full">Proses</a>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="bg-gray-100 p-4 rounded-lg">
                            <div class="font-semibold mb-2">Peran Dunia Usaha dan Media</div>
                            <div class="flex flex-col md:flex-row items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <span
                                        class="bg-blue-900 text-white text-xs font-bold py-1 px-2 rounded-full">[8/8]</span>
                                    <span
                                        class="bg-green-500 text-white text-xs font-bold py-1 px-2 rounded-full">27.00</span>
                                    <span class="bg-blue-900 text-white text-xs font-bold py-1 px-2 rounded-full">Nilai
                                        Maksimal 32.00</span>
                                </div>
                                <a href="proses-peranduniausaha.html"
                                    class="mt-2 md:mt-0 bg-sky-400 hover:bg-sky-500 text-white text-xs font-semibold py-2 px-4 rounded-full">Proses</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Klaster I: Hak Sipil dan Kebebasan -->
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition cursor-pointer">
                    <div onclick="toggleDropdown('hakSipil')" class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-bold mb-2">Klaster I: Hak Sipil dan Kebebasan</h3>
                            <p class="text-gray-600 mb-1">100% | EM <span
                                    class="font-semibold text-green-600">90.00</span> | Nilai Maksimal <span
                                    class="font-semibold text-gray-600">115.00</span></p>
                            <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                                <div class="bg-green-500 h-3 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                        <button
                            class="text-blue-700 hover:text-blue-900 font-bold text-2xl transition-transform transform duration-300"
                            id="icon-hakSipil">+</button>
                    </div>
                    <div id="hakSipil" class="hidden mt-4 space-y-4">
                        <!-- Isi sub-poin -->
                    </div>
                </div>

                <!-- Card Klaster II: Lingkungan Keluarga -->
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition cursor-pointer">
                    <div onclick="toggleDropdown('lingkunganKeluarga')" class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-bold mb-2">Klaster II: Lingkungan Keluarga dan Pengasuhan Alternatif
                            </h3>
                            <p class="text-gray-600 mb-1">100% | EM <span
                                    class="font-semibold text-green-600">109.00</span> | Nilai Maksimal <span
                                    class="font-semibold text-gray-600">156.00</span></p>
                            <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                                <div class="bg-green-500 h-3 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                        <button
                            class="text-blue-700 hover:text-blue-900 font-bold text-2xl transition-transform transform duration-300"
                            id="icon-lingkunganKeluarga">+</button>
                    </div>
                    <div id="lingkunganKeluarga" class="hidden mt-4 space-y-4">
                        <!-- Isi sub-poin -->
                    </div>
                </div>

                <!-- Card Klaster III: Kesehatan Dasar -->
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition cursor-pointer">
                    <div onclick="toggleDropdown('kesehatanDasar')" class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-bold mb-2">Klaster III: Kesehatan Dasar dan Kesejahteraan</h3>
                            <p class="text-gray-600 mb-1">97.87% | EM <span
                                    class="font-semibold text-green-600">121.50</span> | Nilai Maksimal <span
                                    class="font-semibold text-gray-600">150.00</span></p>
                            <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                                <div class="bg-green-500 h-3 rounded-full" style="width: 97.87%"></div>
                            </div>
                        </div>
                        <button
                            class="text-blue-700 hover:text-blue-900 font-bold text-2xl transition-transform transform duration-300"
                            id="icon-kesehatanDasar">+</button>
                    </div>
                    <div id="kesehatanDasar" class="hidden mt-4 space-y-4">
                        <!-- Isi sub-poin -->
                    </div>
                </div>

                <!-- Card Klaster IV: Pendidikan -->
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition cursor-pointer">
                    <div onclick="toggleDropdown('pendidikan')" class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-bold mb-2">Klaster IV: Pendidikan, Pemanfaatan Waktu Luang, dan
                                Kegiatan Budaya</h3>
                            <p class="text-gray-600 mb-1">100% | EM <span
                                    class="font-semibold text-green-600">90.20</span> | Nilai Maksimal <span
                                    class="font-semibold text-gray-600">110.00</span></p>
                            <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                                <div class="bg-green-500 h-3 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                        <button
                            class="text-blue-700 hover:text-blue-900 font-bold text-2xl transition-transform transform duration-300"
                            id="icon-pendidikan">+</button>
                    </div>
                    <div id="pendidikan" class="hidden mt-4 space-y-4">
                        <!-- Isi sub-poin -->
                    </div>
                </div>

                <!-- Card Klaster V: Perlindungan Khusus -->
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition cursor-pointer">
                    <div onclick="toggleDropdown('perlindunganKhusus')" class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-bold mb-2">Klaster V: Perlindungan Khusus</h3>
                            <p class="text-gray-600 mb-1">100% | EM <span
                                    class="font-semibold text-green-600">182.60</span> | Nilai Maksimal <span
                                    class="font-semibold text-gray-600">205.00</span></p>
                            <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                                <div class="bg-green-500 h-3 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                        <button
                            class="text-blue-700 hover:text-blue-900 font-bold text-2xl transition-transform transform duration-300"
                            id="icon-perlindunganKhusus">+</button>
                    </div>
                    <div id="perlindunganKhusus" class="hidden mt-4 space-y-4">
                        <!-- Isi sub-poin -->
                    </div>
                </div>

                <!-- Card Penyelenggaraan KLA di Kecamatan dan Desa/Kelurahan -->
                <div class="bg-white p-6 rounded-2xl shadow-lg hover:shadow-2xl transition cursor-pointer">
                    <div onclick="toggleDropdown('klaDesa')" class="flex justify-between items-center">
                        <div>
                            <h3 class="text-xl font-bold mb-2">Penyelenggaraan SIPANDAKABULAN di Kecamatan dan
                                Desa/Kelurahan</h3>
                            <p class="text-gray-600 mb-1">100% | EM <span
                                    class="font-semibold text-green-600">65.90</span> | Nilai Maksimal <span
                                    class="font-semibold text-gray-600">100.00</span></p>
                            <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                                <div class="bg-green-500 h-3 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                        <button
                            class="text-blue-700 hover:text-blue-900 font-bold text-2xl transition-transform transform duration-300"
                            id="icon-klaDesa">+</button>
                    </div>
                    <div id="klaDesa" class="hidden mt-4 space-y-4">
                        <!-- Isi sub-poin -->
                    </div>
                </div>

            </div>
        </section>

        <script>
            function toggleDropdown(id) {
                const el = document.getElementById(id);
                const icon = document.getElementById('icon-' + id);
                el.classList.toggle('hidden');
                icon.innerText = el.classList.contains('hidden') ? '+' : '−';
            }
        </script>

    </section>

    <!-- Footer -->
    <x-footer></x-footer>


    <script>
        // Toggle mobile menu
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>

</body>

</html>
