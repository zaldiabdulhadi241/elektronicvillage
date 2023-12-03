@extends('admin.partials.sidebar')

@section('dashboard.content')
    <div class="container">
        <h1 class="fs-2">Data Produk</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Foto Produk</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produks as $index => $produk)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td><img src="{{ asset('storage/images/' . $produk->foto_produk) }}" alt="{{ $produk->nama_produk }}">
                        </td>
                        <td>{{ $produk->nama_produk }}</td>
                        <td>
                            <p style="max-width: 250px; max-height: 100px; overflow: hidden; text-overflow: ellipsis">
                                {{ $produk->deskripsi_produk }}</p>
                        </td>
                        <td>Rp{{ number_format($produk->harga) }}</td>
                        <td>{{ $produk->stok }}</td>
                        <td>{{ $produk->kategori->nama_kategori }}</td>
                        <td>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <a href="/admin/produk/edit/{{ $produk->id }}" class="btn btn-warning text-white ">Edit</a>
                                <form action="/admin/produk/{{ $produk->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button onclick="confirm('Ingin Menghapus Produk?')"
                                        class="btn btn-danger text-white">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
