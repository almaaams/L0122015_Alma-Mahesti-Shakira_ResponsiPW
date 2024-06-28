@extends('layouts.app')

@section('title', 'Edit Pegawai')

@section('content')
    <div class="mt-4">
        <h1 class="mb-4">Edit Pegawai</h1>
        <form action="{{ route('pegawais.update', $pegawai->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $pegawai->nama }}" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pegawai->alamat }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('pegawais.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
@endsection