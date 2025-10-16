@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mx-auto shadow-sm" style="max-width: 900px;">
        <div class="card-header bg-pink text-white text-center">
            <h3 class="fw-bold mb-0">Daftar User</h3>
        </div>

        <div class="card-body">
            <a href="{{ route('user.create') }}" class="btn btn-pink mb-3">
                + Tambah User Baru
            </a>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-bordered text-center align-middle">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $u)
                        <tr>
                            <td>{{ $u->id }}</td>
                            <td>{{ $u->nama }}</td>
                            <td>{{ $u->npm }}</td>
                            <td>{{ $u->kelas->nama_kelas ?? '-' }}</td>
                            <td>
                                <a href="{{ route('user.edit', $u->uuid) }}" class="btn btn-warning btn-sm">Edit</a>

                                <form action="{{ route('user.destroy', $u->uuid) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus user ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-muted">Belum ada data user</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .bg-pink { background-color: #ffc5d3; }
    .btn-pink { background-color: #ff90b3; color: white; border: none; }
    .btn-pink:hover { background-color: #ff5f8f; color: white; }
</style>
@endsection
