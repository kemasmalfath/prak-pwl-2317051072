@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit User</h1>
    
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control" 
                   value="{{ old('nama', $user->nama) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="npm" class="form-label">NPM:</label>
            <input type="text" id="npm" name="npm" class="form-control" 
                   value="{{ old('npm', $user->nim) }}" required>
        </div>
        
        <div class="mb-3">
            <label for="kelas_id" class="form-label">Kelas:</label>
            <select name="kelas_id" id="kelas_id" class="form-select" required>
                @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}" 
                    {{ $user->kelas_id == $kelasItem->id ? 'selected' : '' }}>
                    {{ $kelasItem->nama_kelas }}
                </option>
                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection