@extends('layouts.main')

@section('topbar')
    @include('partials.topbar')
@endsection

@section('container')
    <div class="keranjang text-3xl font-bold px-32 mx-auto my-14 flex flex-col">
        <h1 class="text-primary mb-16">Keranjang Saya</h1>
        <div
            class="thead flex flex-row text-text text-sm font-semibold justify-between items-center h-20 px-24 py-5 shadow-md">
            <h5 class="mr-[420px]">Produk</h5>
            <div class="flex justify-between w-full">
                <h5>Harga Satuan</h5>
                <h5>Kuantitas</h5>
                <h5>Total Harga</h5>
                <h5>Aksi</h5>
            </div>
        </div>
        <div
            class="tbody flex flex-row text-text text-sm font-semibold justify-between items-center px-24 py-5 shadow-md overflow-hidden">
            <img width="70px" height="70px" src="{{ asset('images/produk1.png') }}" alt="">
            <h5 class="text-heading ml-[36px] mr-[300px]">Galaxy M13 (4GB | 64 GB )</h5>
            <div class="flex justify-between w-full">
                <h5 class="text-center text-heading">Rp19.800.000</h5>
                <h5 class="text-center text-heading">1</h5>
                <h5 class="text-center text-primary">Rp19.800.000</h5>
                <h5 class="text-center text-heading">Hapus</h5>
            </div>
        </div>
        <div
            class="tbody flex flex-row text-text text-sm font-semibold justify-between items-center px-24 py-5 shadow-md overflow-hidden">
            <img width="70px" height="70px" src="{{ asset('images/produk1.png') }}" alt="">
            <h5 class="text-heading ml-[36px] mr-[300px]">Galaxy M13 (4GB | 64 GB )</h5>
            <div class="flex justify-between w-full">
                <h5 class="text-center text-heading">Rp800.000</h5>
                <h5 class="text-center text-heading">1</h5>
                <h5 class="text-center text-primary">Rp800.000</h5>
                <h5 class="text-center text-heading">Hapus</h5>
            </div>
        </div>
        <div
            class="ttotal flex flex-row text-text text-sm font-semibold justify-between items-center px-24 py-5 shadow-md overflow-hidden">
            <h5 class="text-heading flex flex-row text-sm">Total : Rp72.000.000</h5>
            <a href="/checkout" class="bg-primary text-bg3 py-5 px-14">Pembayaran</a>
        </div>
    </div>
@endsection
