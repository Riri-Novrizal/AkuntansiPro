@extends('layouts.app')
@section('title', 'Tambah Produk')

@section('content')
<div class="container">
    <div class="container">
    <br>
    <h4 class="mb-3">Tambah Produk</h4>

    <form action="{{ route('produks.store') }}" method="POST">
        @csrf


        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Satuan</label>
            <input type="text" name="satuan" class="form-control" value="{{ old('satuan') }}" required>
            @error('satuan') <small class="text-danger">{{ $message }}</small> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Harga Beli</label>
            <input type="text" name="harga_beli" class="form-control" value="{{ old('harga_beli') }}" required>
            @error('harga_beli') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

     

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('produks.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
</div>
@endsection
