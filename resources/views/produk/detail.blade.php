@extends('layouts.main')

@section('container')
    <div class="flex flex-col gap-y-8 px-32 py-3">
        <div class="flex flex-row justify-start items-start">
            <div class="flex flex-col">
                <img class="mb-3" src="{{ asset('storage/images/detail1.png') }}" width="405px" height="300px" alt="">
                <div class="flex flex-row gap-x-2">
                    <img clas src="{{ asset('storage/images/detail1.png') }}" width="100px" height="100px" alt="">
                    <img clas src="{{ asset('storage/images/detail1.png') }}" width="100px" height="100px" alt="">
                    <img clas src="{{ asset('storage/images/detail1.png') }}" width="100px" height="100px" alt="">
                </div>
            </div>
            <div class="flex flex-col ms-24">
                {{-- <p class="text-primary font-semibold text-xl">Hemat - Rp200.000</p> --}}
                <h1 class="text-4xl text-heading font-semibold mb-3">{{ $produk->nama_produk }}</h1>
                <div class="flex flex-row text-3xl font-bold mb-5">
                    <h3 class="text-heading me-2">Rp{{ number_format($produk->harga) }}</h3>
                </div>
                <div class="gap-y-4 flex flex-col mb-8">
                    <div class="flex flex-row justify-start text-light gap-x-5">
                        <p>Pengiriman</p>
                        <div class="flex flex-col">
                            <p>Pengiriman Ke</p>
                            <p>Ongkos Kirim</p>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-heading font-bold">KOTA JAKARTA SELATAN</p>
                            <p>Rp17.000 - Rp22.000</p>
                        </div>
                    </div>
                    <div class="flex flex-row text-light justify-start gap-x-8">
                        <p>Kuantitas</p>
                        <div class="flex flex-col">
                            <p>Tersisa {{ $produk->stok }} Pcs</p>
                        </div>
                    </div>

                </div>
                <div class="block gap-x-4 items-center">
                    <form action="/user/keranjang/" method="POST">
                        @csrf
                        <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="id_produk" value="{{ $produk->id }}">
                        <input type="hidden" name="total_harga" value="{{ $produk->harga }}">
                        <div class="flex flex-row items-center text-light justify-start gap-x-8 mb-4">
                            <p>Jumlah</p>
                            <div class="border p-2">
                                <input type="number" name="jumlah_barang" value="1">
                            </div>
                        </div>
                        <button class="flex flex-row gap-x-2 items-center px-4 py-3 border border-primary text-primary"><svg
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M7.42233 19.8203C7.84433 19.8203 8.18733 20.1633 8.18733 20.5853C8.18733 21.0073 7.84433 21.3493 7.42233 21.3493C7.00033 21.3493 6.65833 21.0073 6.65833 20.5853C6.65833 20.1633 7.00033 19.8203 7.42233 19.8203Z"
                                    stroke="#008ECC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M18.6747 19.8203C19.0967 19.8203 19.4397 20.1633 19.4397 20.5853C19.4397 21.0073 19.0967 21.3493 18.6747 21.3493C18.2527 21.3493 17.9097 21.0073 17.9097 20.5853C17.9097 20.1633 18.2527 19.8203 18.6747 19.8203Z"
                                    stroke="#008ECC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M2.74988 3.25L4.82988 3.61L5.79288 15.083C5.87088 16.018 6.65188 16.736 7.58988 16.736H18.5019C19.3979 16.736 20.1579 16.078 20.2869 15.19L21.2359 8.632C21.3529 7.823 20.7259 7.099 19.9089 7.099H5.16388"
                                    stroke="#008ECC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M14.1254 10.795H16.8984" stroke="#008ECC" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            Masukkan Keranjang</button>
                    </form>
                    {{-- <form action="/user/keranjang">
                        <button class="px-11 py-3 border border-primary bg-primary text-bg3">Beli Sekarang</button>
                    </form> --}}
                </div>
            </div>
        </div>
        <h3 class="text-heading font-medium">Spesifikasi Produk</h3>
        <div class="flex flex-col">
            <h3 class="text-light">Kategori</h3>
            <p class="text-primary font-semibold mb-8">Handphone</p>
            <h3 class="text-light">Stok</h3>
            <p>{{ $produk->stok }}</p>
        </div>
        <h3 class="text-heading font-medium">Deskripsi Produk</h3>
        <div class="flex flex-col">
            <p class="text-justify text-text whitespace-pre-wrap">
                {!! $produk->deskripsi_produk !!}
            </p>
        </div>
        <div class="produk-terkait my-28">
            <div class="flex flex-row justify-between">
                <h2 class="text-text text-xl font-bold">Produk terkait dengan <span class="text-primary">Handphone</span>
                </h2>
                <a href="#" class="flex flex-row justify-center items-center">
                    <p class="font-medium">Lihat Semua</p>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.375 3.75L11.625 9L6.375 14.25" stroke="#008ECC" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
            <div class="w-80 mt-4 h-1 mb-10 bg-primary"></div>
            <div class="grid grid-cols-4">
                @foreach ($produkList as $produk)
                    <a href="/produk/{{ $produk->slug }}"
                        class="bg-white border border-border rounded-3xl shadow relative overflow-hidden">
                        <div
                            class="w-16 h-16 bg-primary absolute top-0 right-0 rounded-bl-3xl flex flex-col justify-center items-center text-bg3 font-bold">
                            <p class="text-sm">56%</p>
                            <p class="text-sm">OFF</p>
                        </div>
                        <div class="bg-bg1">
                            <img class="rounded-t-lg mx-auto" width="150px"
                                src="{{ asset('storage/images/produk1.png') }}" alt="" />
                        </div>
                        <div class="p-5">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $produk->nama_produk }}
                            </h5>
                            <div class="with-discount flex flex-row gap-x-2 items-center">
                                <p class="mb-3 font-bold text-lg">Rp{{ number_format($produk->harga) }}</p>
                                <p class="mb-3 font-bold text-md line-through text-light">Rp20.000.000</p>
                            </div>
                            <hr class="text-border mb-2">
                            <p class="mb-3 font-normal text-primary text-md">Hemat - Rp200.000</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
