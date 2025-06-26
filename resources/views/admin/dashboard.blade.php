@extends('layouts.app')

@section('content')
<div class="card bg-dark text-white border-0 shadow">
    <div class="card-body">
        <h3 class="mb-4">Daftar Pemesan Tiket</h3>
        <div class="table-responsive">
            <table class="table table-dark table-bordered table-striped align-middle">
                <thead class="table-secondary text-dark">
                    <tr>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tickets as $t)
                    <tr>
                        <td>{{ $t->kode }}</td>
                        <td>{{ $t->nama }}</td>
                        <td>{{ $t->email }}</td>
                        <td>{{ $t->status_checkin }}</td>
                        <td>
                            <a href="/admin/edit/{{ $t->id }}" class="btn btn-sm btn-warning">Edit</a>
                            <form method="POST" action="/admin/delete/{{ $t->id }}" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Hapus data ini?')" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    @if($tickets->isEmpty())
                    <tr>
                        <td colspan="5" class="text-center text-muted">Belum ada pemesanan tiket.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
