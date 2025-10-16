@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mx-auto" style="max-width: 700px;">
        <div class="card-header bg-pink text-white text-center">
            <h3 class="fw-bold mb-0">Edit Pengguna</h3>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('user.update', $user->uuid) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" class="form-control form-control-lg shadow-sm" value="{{ old('nama', $user->nama) }}" required>
                </div>

                <div class="mb-4">
                    <label for="npm" class="form-label fw-semibold">NPM</label>
                    <input type="text" id="npm" name="npm" class="form-control form-control-lg shadow-sm" value="{{ old('npm', $user->npm) }}" required>
                </div>

                <div class="mb-4">
                    <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="form-select form-select-lg shadow-sm" required>
                        <option value="" disabled>Pilih kelas...</option>
                        @foreach ($kelas as $k)
                            <option value="{{ $k->id }}" {{ (old('kelas_id', $user->kelas_id) == $k->id) ? 'selected' : '' }}>
                                {{ $k->nama_kelas }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('list_user') }}" class="btn btn-outline-secondary btn-lg">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-pink btn-lg shadow-sm">
                        <i class="bi bi-save-fill"></i> Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
.bg-pink { background-color: #ffc5d3; }
.btn-pink { background-color: #ff90b3; color: white; border: none; }
.btn-pink:hover { background-color: #ff5f8f; color: white; }
</style>
@endsection
