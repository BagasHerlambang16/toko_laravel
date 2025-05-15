
@extends('adminlte::page')

@section('title', 'Edit Produk')

@section('content_header')
    <h1>Edit Produk</h1>
@stop

@section('content')
    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama">Nama Produk</label>
            <input type="text" name="nama" class="form-control" value="{{ $produk->nama }}" required>
        </div>

        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" name="stok" class="form-control" value="{{ $produk->stok }}" required>
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ $produk->harga }}" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@stop
