@extends('layouts.app')

@section('title', 'Tambah Pegawai')

@section('content')
    <div class="mt-4">
        <h1 class="mb-4">Tambah Pegawai</h1>
        <form action="{{ route('pegawais.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('pegawais.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection