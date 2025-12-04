{{-- PASTIKAN SEPERTI INI --}}
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Daftar Mata Kuliah</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <a href="{{ route('matakuliah.create') }}" class="btn btn-success mb-3">
        + Tambah Mata Kuliah Baru
    </a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mks as $mk)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>
                <td>
                    <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection