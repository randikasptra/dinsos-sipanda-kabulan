

@extends('layouts.dashboard')

@section('content')
    <div class="text-center mt-10">
        <h1 class="text-3xl font-bold text-blue-700">Dashboard Admin</h1>
        <p class="mt-4 text-green-600">Selamat datang, Admin SIPANDAKABULAN.</p>
        <div class="mt-8 space-y-4">
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-2">Jumlah Pengguna</h2>
                <p class="text-2xl text-blue-600 font-bold">123</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-2">Evaluasi Terverifikasi</h2>
                <p class="text-2xl text-green-600 font-bold">87%</p>
            </div>
        </div>
    </div>
@endsection
