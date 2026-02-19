@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Daftar Mata Kuliah</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <div class="mb-3">
        <a href="{{ route('matakuliah.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i> Tambah Mata Kuliah Baru
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th width="5%">No</th>
                    <th>Nama Mata Kuliah</th>
                    <th width="10%">SKS</th>
                    <th width="15%">ID (UUID)</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mks as $index => $mk)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $mk->nama_mk }}</td>
                    <td class="text-center">{{ $mk->sks }}</td>
                    <td><small>{{ substr($mk->id, 0, 8) }}...</small></td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">
                        <i class="fas fa-info-circle"></i> Belum ada data mata kuliah
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection