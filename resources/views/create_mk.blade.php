@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Buat Mata Kuliah Baru</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('matakuliah.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="nama_mk" class="form-label">Nama Mata Kuliah:</label>
            <input type="text" id="nama_mk" name="nama_mk" class="form-control" 
                   placeholder="Contoh: Pemrograman Web Lanjut" required>
            @error('nama_mk')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="sks" class="form-label">SKS:</label>
            <input type="number" id="sks" name="sks" class="form-control" 
                   min="1" max="10" placeholder="Contoh: 3" required>
            @error('sks')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
    </form>
</div>
@endsection