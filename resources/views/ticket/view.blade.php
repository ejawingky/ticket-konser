@extends('layouts.app')

@section('content')
<div class="text-center mb-4">
  <h2 class="fw-bold">Tiket Berhasil Dipesan 🎉</h2>
  <p class="fw-bold">Berikut adalah detail tiket kamu. Screenshot halaman ini atau catat kodenya ya!</p>
</div>

@if ($ticket)
<div class="card bg-dark border-light mx-auto" style="max-width: 600px;" data-aos="zoom-in">
  <div class="card-body text-white">
    <h5 class="card-title">🎟️ Kode Tiket: <strong>{{ $ticket->kode }}</strong></h5>
    <p><strong>Nama:</strong> {{ $ticket->nama }}</p>
    <p><strong>Email:</strong> {{ $ticket->email }}</p>
    <p><strong>No HP:</strong> {{ $ticket->no_hp }}</p>
    <p><strong>Status Check-in:</strong>
        @if($ticket->status_checkin == 'sudah')
          <span class="badge bg-success">Sudah</span>
        @else
          <span class="badge bg-warning text-dark">Belum</span>
        @endif
    </p>
  </div>
</div>
@else
<p class="text-danger">Tiket tidak ditemukan.</p>
@endif
@endsection
