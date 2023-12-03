@extends('layouts.main')

@section('container')
    <div class="checkout text-3xl font-bold px-32 mx-auto my-14 flex flex-col">
        <div class="kontak flex flex-col mb-16">
            <h1 class="text-primary mb-16">Informasi Kontak</h1>
            <div class="tkontak flex flex-row text-text text-sm font-semibold items-center justify-between py-5 shadow-md">
                <div class="flex flex-col items-center flex-initial w-96">
                    <h1 class="nama text-heading font-bold">{{ Auth::user()->nama }}</h1>
                    <p class="nama text-text font-bold ">
                        {{ Auth::user()->telp ?? 'Mohon Masukkan Nomor Telepon Terlebih dulu' }}
                    </p>
                </div>
                <div class="alamat text-text mr-10">
                    <p>{{ Auth::user()->alamat ?? 'Mohon Masukkan Alamat Terlebih dulu' }}</p>
                </div>
            </div>
        </div>
        <h1 class="text-primary mb-16">Produk yang dipesan</h1>
        <div
            class="thead flex flex-row text-text text-sm font-semibold justify-between items-center h-20 px-24 py-5 shadow-md">
            <h5 class="mr-[420px]">Produk</h5>
            <div class="flex justify-between w-full">
                <h5>Harga Satuan</h5>
                <h5>Kuantitas</h5>
                <h5>Total Harga</h5>
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
                </div>
            </div>
        @endforeach
        <div
            class="tpengiriman flex flex-row text-text text-sm font-semibold items-center justify-between py-5 shadow-md p-10">
            <h1 class="nama text-heading font-bold">Pilihan Pengiriman : </h1>
            <div class="alamat text-text">
                <select>
                    <option value="JNT">JNT</option>
                    <option value="JNE">JNE</option>
                    <option value="POS">TIKI</option>
                    <option value="POS">POSAJA</option>
                </select>
            </div>
            <div class="ongkir text-primary">
                <p>Rp{{ number_format($transaksis[0]->ongkos_kirim) }}</p>
            </div>
        </div>
        <div class="ttotal flex flex-row text-text text-sm font-semibold items-center justify-between py-5 shadow-md p-10">
            <h1 class="nama text-heading font-bold">Total Harga : </h1>
            <div class="ongkir text-primary">
                <p>Rp{{ number_format($total_harga) }}</p>
            </div>
        </div>
        <div class="ttotal flex flex-row text-text text-sm font-semibold py-5 px-5 shadow-md overflow-hidden">
            <form action="/user/checkout/" method="post">
                @csrf
                <button type="submit"
                    @empty(Auth::user()->telp && Auth::user()->alamat)
                    disabled
                @endempty
                    class="bg-primary text-bg3 py-5 px-14 @empty(Auth::user()->telp && Auth::user()->alamat)
                    text-border bg-text
                @endempty">Bayar
                    Sekarang</button>
            </form>
        </div>
    </div>
@endsection
