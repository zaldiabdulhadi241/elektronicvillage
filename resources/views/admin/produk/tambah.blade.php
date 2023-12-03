@extends('admin.partials.sidebar')

@section('dashboard.content')
    <div class="container">
        <h1 class="fs-2 mb-4">Tambah Produk</h1>
        <form method="POST" action="/admin/produk/" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="foto_produk" class="form-label">Foto Produk</label>
                <input type="file" class="form-control" id="foto_produk" name="foto_produk">
            </div>
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk">
            </div>
            <div class="mb-3">
                <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
                <textarea cols="50" rows="10" class="form-control" id="deskripsi_produk" name="deskripsi_produk"></textarea>
            </div>
            <div class="mb-3">
                <label for="harga_produk" class="form-label">Harga Produk</label>
                <input type="text" class="form-control" id="harga_produk" name="harga">
            </div>
            <div class="mb-3">
                <label for="kategori_produk" class="form-label">Kategori Produk</label>
                <select class="form-control" name="id_kategori" id="kategori_produk">
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="stok_produk" class="form-label">Stok Produk</label>
                <input type="number" class="form-control" id="stok_produk" name="stok">
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
@endsection
