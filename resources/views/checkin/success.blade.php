@extends('layouts.app')

@section('content')
<h3>Check-in Berhasil!</h3>
<div class="alert alert-success">Tiket valid. Silakan masuk ke venue.</div>
<ul>
    <li><strong>Nama:</strong> {{ $t->nama }}</li>
    <li><strong>Email:</strong> {{ $t->email }}</li>
    <li><strong>Kode Tiket:</strong> {{ $t->kode }}</li>
</ul>
@endsection
