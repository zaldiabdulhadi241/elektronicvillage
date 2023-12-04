@extends('layouts.main')

@include('partials.topbar')
@section('container')
    <div class="container px-32 mx-auto my-5">
        <h1 class="text-primary text-2xl font-bold my-4">{{ $title }}</h1>
        <div class="grid grid-cols-4 gap-x-4">
            @foreach ($produkList->where('id_kategori', 1) as $produk)
                <a href="/produk/{{ $produk->slug }}"
                    class="bg-white border border-border rounded-3xl shadow relative overflow-hidden">
                    <div
                        class="w-16 h-16 bg-primary absolute top-0 right-0 rounded-bl-3xl flex flex-col justify-center items-center text-bg3 font-bold">
                        <p class="text-sm">56%</p>
                        <p class="text-sm">OFF</p>
                    </div>
                    <div class="bg-bg1 flex h-48">
                        <img class="rounded-t-lg mx-auto object-cover" width="150px"
                            src="{{ asset('storage/images/' . $produk->foto_produk) }}" alt="$produk->nama_produk" />
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
@endsection
