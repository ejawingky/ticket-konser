@extends('layouts.app')

@section('content')
<div class="text-center mb-5">
  <h1 class="fw-bold text-white">Pesan Tiket Konser</h1>
  <p class="fw-bold text-white">Jangan sampai kehabisan! Isi data di bawah untuk mendapatkan tiketmu 🎉</p>
</div>

<form method="POST" action="/order-ticket" class="mx-auto" style="max-width: 600px;">
    @csrf
    <div class="mb-3">
        <label>Nama Lengkap</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>No HP</label>
        <input type="text" name="no_hp" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" rows="3" required></textarea>
    </div>
    <div class="d-grid">
        <button class="btn btn-custom">🎟️ Pesan Tiket Sekarang</button>
    </div>
</form>
@endsection
