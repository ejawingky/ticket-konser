@extends('layouts.app')

@section('content')
<h3>Laporan Kehadiran</h3>

<h5>✅ Sudah Check-in</h5>
<ul>
    @foreach ($sudah as $t)
        <li>{{ $t->nama }} - {{ $t->kode }}</li>
    @endforeach
</ul>

<h5 class="mt-4">❌ Belum Check-in</h5>
<ul>
    @foreach ($belum as $t)
        <li>{{ $t->nama }} - {{ $t->kode }}</li>
    @endforeach
</ul>
@endsection
