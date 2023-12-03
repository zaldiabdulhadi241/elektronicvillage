@extends('admin.partials.sidebar')

@section('dashboard.content')
    <div class="container">
        <h1 class="fs-2">Data Transaksi</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Transaksi</th>
                    <th>Nama Produk</th>
                    <th>Jumlah Barang</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksis as $index => $transaksi)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $transaksi->id }}</td>
                        <td>{{ $transaksi->produk->nama_produk }}</td>
                        <td>
                            <p>{{ $transaksi->jumlah_barang }}</p>
                        </td>
                        <td>Rp{{ number_format($transaksi->total_harga) }}</td>
                        <td>{{ $transaksi->status }}</td>
                        <td>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                <a href="/admin/transaksi/edit/{{ $transaksi->id }}"
                                    class="btn btn-warning text-white ">Edit</a>
                                <form action="/admin/transaksi/{{ $transaksi->id }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button onclick="confirm('Ingin Menghapus transaksi?')"
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
