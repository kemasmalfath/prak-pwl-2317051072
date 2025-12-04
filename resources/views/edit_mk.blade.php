@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit Mata Kuliah</h1>
    
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="nama_mk" class="form-label">Nama Mata Kuliah:</label>
            <input type="text" id="nama_mk" name="nama_mk" 
                   class="form-control" 
                   value="{{ old('nama_mk', $mk->nama_mk) }}" 
                   required>
        </div>
        
        <div class="mb-3">
            <label for="sks" class="form-label">SKS:</label>
            <input type="number" id="sks" name="sks" 
                   class="form-control" 
                   value="{{ old('sks', $mk->sks) }}" 
                   min="1" max="10" required>
        </div>
        
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Update
        </button>
        <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </form>
</div>
@endsection