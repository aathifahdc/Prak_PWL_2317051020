@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah User</h1>

    <form action="{{ route('user.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Nama:</label><br>
            <input type="text" id="name" name="name" required>
        </div>

        <div>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required>
        </div>

        <div>
            <label for="kelas_id">Kelas:</label><br>
            <select name="kelas_id" id="kelas_id" required>
                <option value="">-- Pilih Kelas --</option>
                @foreach ($kelas as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                @endforeach
            </select>
        </div>

        <div style="margin-top: 10px;">
            <button type="submit">Simpan</button>
            <a href="{{ route('user.index') }}">Batal</a>
        </div>
    </form>
</div>
@endsection
