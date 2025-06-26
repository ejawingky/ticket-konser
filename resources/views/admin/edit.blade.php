@extends('layouts.app')

@section('content')
<h3>Edit Pemesan</h3>
<form method="POST" action="/admin/update/{{ $t->id }}">
    @csrf
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $t->nama }}" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="{{ $t->email }}" class="form-control">
    </div>
    <div class="mb-3">
        <label>No HP</label>
        <input type="text" name="no_hp" value="{{ $t->no_hp }}" class="form-control">
    </div>
    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control">{{ $t->alamat }}</textarea>
    </div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection
