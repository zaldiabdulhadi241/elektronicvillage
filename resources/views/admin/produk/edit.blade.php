@extends('admin.partials.sidebar')

@section('dashboard.content')
    <div class="container">
        <h1 class="fs-2 mb-4">Edit Produk</h1>
        <form method="POST" action="/admin/produk/{{ $produk->id }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <label for="foto_produk" class="form-label">Foto Produk</label>
                <input type="file" class="form-control" id="foto_produk" name="foto_produk"
                    value="{{ $produk->foto_produk }}">
            </div>
            <div class="mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                    placeholder="{{ $produk->nama_produk }}" value="{{ $produk->nama_produk }}">
            </div>
            <div class="mb-3">
                <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
                <textarea cols="50" rows="10" class="form-control" id="deskripsi_produk" name="deskripsi_produk">{{ $produk->deskripsi_produk }}</textarea>
            </div>
            <div class="mb-3">
                <label for="harga_produk" class="form-label">Harga Produk</label>
                <input type="text" class="form-control" id="harga_produk" name="harga"
                    placeholder="{{ $produk->harga }}" value="{{ $produk->harga }}">
            </div>
            <div class="mb-3">
                <label for="brand_produk" class="form-label">Brand Produk</label>
                <select class="form-control" name="id_brand" id="brand_produk">
                    @foreach ($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->nama_brand }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="kategori_produk" class="form-label">Kategori Produk</label>
                <select class="form-control" name="id_kategori" id="kategori_produk"
                    placeholder="{{ $produk->kategori->nama_kategori }}">
                    @foreach ($kategoris as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="stok_produk" class="form-label">Stok Produk</label>
                <input type="number" class="form-control" id="stok" placeholder="{{ $produk->stok }}"
                    value="{{ $produk->stok }}">
            </div>
            <button type="submit" class="btn btn-primary">Edit Data</button>
        </form>
    </div>
@endsection
