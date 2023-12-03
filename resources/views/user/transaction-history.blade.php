@extends('layouts.main')

@section('topbar')
    @include('partials.topbar')
@endsection

@section('container')
    <div class="keranjang text-3xl font-bold px-32 mx-auto my-14 flex flex-col">
        <h1 class="text-primary mb-16">Riwayat Transaksi</h1>
        <div
            class="thead flex flex-row text-text text-sm font-semibold justify-between items-center h-20 px-24 py-5 shadow-md">
            <h5 class="mr-[450px]">Produk</h5>
            <div class="flex justify-between w-full">
                <h5>Kuantitas</h5>
                <h5>Total Harga</h5>
                <h5>Status</h5>
            </div>
        </div>
        @foreach ($transaksis as $transaksi)
            @if ($transaksi->status == 'success')
                <div
                    class="tbody flex flex-row text-text text-sm font-semibold justify-between items-center px-24 py-5 shadow-md overflow-hidden">
                    <img width="70px" height="70px" src="{{ asset('storage/images/produk1.png') }}" alt="">
                    <h5 class="text-heading ml-[36px]">{{ $transaksi->produk->nama_produk }}
                    </h5>
                    <h5 class="text-center text-heading">{{ $transaksi->jumlah_barang }}</h5>
                    <h5 class="text-center text-primary">Rp{{ number_format($transaksi->total_harga) }}</h5>
                    <div
                        class="bg-primary @if ($transaksi->status == 'success') bg-success @endif  px-2 py-1 rounded-md text-bg3">
                        <p>{{ ucwords($transaksi->status) }}</p>
                    </div>
                </div>
            @endif
            <a href="/checkout/{{ $transaksi->id }}"
                class="tbody flex flex-row text-text text-sm font-semibold justify-between items-center px-24 py-5 shadow-md overflow-hidden">
                <img width="70px" height="70px" src="{{ asset('storage/images/produk1.png') }}" alt="">
                <h5 class="text-heading ml-[36px]">{{ $transaksi->produk->nama_produk }}
                </h5>
                <h5 class="text-center text-heading">{{ $transaksi->jumlah_barang }}</h5>
                <h5 class="text-center text-primary">Rp{{ number_format($transaksi->total_harga) }}</h5>
                <div class="bg-primary @if ($transaksi->status == 'success') bg-success @endif  px-2 py-1 rounded-md text-bg3">
                    <p>{{ ucwords($transaksi->status) }}</p>
                </div>
            </a>
        @endforeach
    </div>
@endsection
