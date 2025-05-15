@extends('adminlte::page')

@section('title', 'Tambah Produk')

@section('content_header')
    <h1>Tambah Produk</h1>
@stop

@section('content')
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama">Nama Produk</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" name="stok" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control" required step="0.01">
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@stop
