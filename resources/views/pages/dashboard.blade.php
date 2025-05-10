@extends('layouts.dashboard')

@section('content')
<div x-data="{ openId: null }" class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
    @foreach ($klasters as $klaster)
        <x-card-klaster 
            :id="$klaster['id']"
            :title="$klaster['title']"
            :nilai-em="$klaster['nilai_em']"
            :nilai-maksimal="$klaster['nilai_maksimal']"
            :progres="$klaster['progres']"
            :sub-poin="$klaster['sub_poin']"
        />
    @endforeach
</div>

@endsection
