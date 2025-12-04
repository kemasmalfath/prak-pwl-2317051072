@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1>Daftar Pengguna</h1>
    
    <table class="table table-striped">
        <thead>
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
                <td>{{ $user->nim }}</td>
                <td>{{ $user->nama_kelas }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Tambahkan kolom Aksi di thead -->
<th>Aksi</th>

<!-- Tambahkan di tbody -->
<td>
    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
    <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" 
                onclick="return confirm('Yakin hapus user {{ $user->nama }}?')">
            Hapus
        </button>
    </form>
</td>
</div>
@endsection