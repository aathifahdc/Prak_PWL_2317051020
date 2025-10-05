@extends('layouts.app')

@section('content')
<div class="card p-4">
  <h1 class="mb-4">Daftar Pengguna</h1>

  <table class="table table-bordered">
    <thead class="table-light">
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Kelas</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->nama }}</td>
        <td>{{ $user->npm }}</td>
        <td>{{ $user->nama_kelas }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
