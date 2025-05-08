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

                @php
                    $klaster = [
                        [
                            'id' => 'kelembagaan',
                            'judul' => 'Kelembagaan',
                            'persentase' => 100,
                            'em' => 146.0,
                            'maksimal' => 164.0,
                            'detail' => [
                                [
                                    'judul' => 'Peraturan Daerah tentang SIPANDAKABULAN',
                                    'progres' => '[4/4]',
                                    'nilai' => '88.00',
                                    'maksimal' => '96.00',
                                    'link' => 'proses-peraturandaerah.html',
                                ],
                                [
                                    'judul' => 'Penguatan Kelembagaan',
                                    'progres' => '[7/7]',
                                    'nilai' => '31.00',
                                    'maksimal' => '36.00',
                                    'link' => 'proses-penguatan.html',
                                ],
                                [
                                    'judul' => 'Peran Dunia Usaha dan Media',
                                    'progres' => '[8/8]',
                                    'nilai' => '27.00',
                                    'maksimal' => '32.00',
                                    'link' => 'proses-peranduniausaha.html',
                                ],
                            ],
                        ],
                        [
                            'id' => 'hakSipil',
                            'judul' => 'Klaster I: Hak Sipil dan Kebebasan',
                            'persentase' => 100,
                            'em' => 90.0,
                            'maksimal' => 115.0,
                            'detail' => [],
                        ],
                        [
                            'id' => 'lingkunganKeluarga',
                            'judul' => 'Klaster II: Lingkungan Keluarga dan Pengasuhan Alternatif',
                            'persentase' => 100,
                            'em' => 109.0,
                            'maksimal' => 156.0,
                            'detail' => [],
                        ],
                        // ... Tambahkan 4 klaster lainnya ...
                    ];
                @endphp

                @foreach ($klaster as $k)
                    <x-card-klaster :id="$k['id']" :judul="$k['judul']" :persentase="$k['persentase']" :em="$k['em']"
                        :maksimal="$k['maksimal']" :detail="$k['detail']" />
                @endforeach

            </div>
        </section>

        <script>
            function toggleDropdown(id) {
                const content = document.getElementById(id);
                const icon = document.getElementById('icon-' + id);
                if (content.classList.contains('hidden')) {
                    content.classList.remove('hidden');
                    icon.innerText = '−';
                } else {
                    content.classList.add('hidden');
                    icon.innerText = '+';
                }
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
