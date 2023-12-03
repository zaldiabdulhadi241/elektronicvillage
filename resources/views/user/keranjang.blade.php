@extends('layouts.main')

@section('topbar')
    @include('partials.topbar')
@endsection

@section('container')
    <div class="keranjang text-3xl font-bold px-32 mx-auto my-14 flex flex-col">
        <h1 class="text-primary mb-16">Keranjang Saya</h1>

        @if ($keranjangs->count() > 0)
            <div
                class="thead flex flex-row text-text text-sm font-semibold justify-between items-center h-20 px-24 py-5 shadow-md">
                <h5 class="w-full">Produk</h5>
                <div class="flex justify-between w-full">
                    <h5>Harga Satuan</h5>
                    <h5>Kuantitas</h5>
                    <h5>Total Harga</h5>
                    <h5>Aksi</h5>
                </div>
            </div>
            @foreach ($keranjangs as $keranjang)
                <div
                    class="tbody flex flex-row text-text text-sm font-semibold justify-between items-center px-24 py-5 shadow-md overflow-hidden">
                    <img width="70px" height="70px" src="{{ asset('storage/images/produk1.png') }}" alt="">
                    <h5 class="text-heading ml-[36px] mr-[200px] w-[400px]">{{ $keranjang->produk->nama_produk }}</h5>
                    <div class="flex justify-between w-full">
                        <h5 class="text-center text-heading">Rp{{ number_format($keranjang->produk->harga) }}</h5>
                        <h5 class="text-center text-heading">{{ $keranjang->jumlah_barang }}</h5>
                        <h5 class="text-center text-primary">Rp{{ number_format($keranjang->total_harga) }}</h5>
                        <form action="/user/keranjang/{{ $keranjang->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" onclick="confirm('Ingin menghapus Produk dari Keranjang?')"
                                class="text-center text-heading">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
            <div
                class="ttotal flex flex-row text-text text-sm font-semibold justify-between items-center px-24 py-5 shadow-md overflow-hidden">

                <h5 class="text-heading flex flex-row text-sm">Total : Rp{{ number_format($t_harga) }}</h5>
                <form action="/user/transaksi/" method="post">
                    @csrf
                    <input type="hidden" name="id_keranjang" value="{{ $keranjang->id }}">
                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="id_produk" value="{{ $keranjang->produk->id }}">
                    <input type="hidden" name="jumlah_barang" value="{{ $keranjang->jumlah_barang }}">
                    <input type="hidden" name="ongkos_kirim" value="15000">
                    <input type="hidden" name="total_harga" value="{{ $t_harga }}">
                    <button type="submit" class="bg-primary text-sm text-bg3 py-5 px-14">Pembayaran</button>
                </form>
            </div>
        @else
            <small class="text-sm text-text">Belum ada produk di Keranjang</small>
        @endif
    </div>
@endsection
