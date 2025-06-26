@extends('layouts.app')

@section('content')
<h3>Form Check-in Tiket</h3>
@if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif
<form method="POST" action="/checkin">
    @csrf
    <div class="mb-3">
        <label>Kode Tiket</label>
        <input type="text" name="kode" class="form-control" required>
    </div>
    <button class="btn btn-primary">Check-in</button>
</form>
@endsection
