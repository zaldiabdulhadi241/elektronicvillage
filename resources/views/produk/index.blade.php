@extends('layouts.main')

@auth
    @section('topbar')
        @include('partials.topbar')
    @endsection
@endauth

@section('container')
    <div class="discover mb-28 px-32 mx-auto my-5">
        <div class="flex flex-row justify-between">
            <h2 class="text-primary text-xl font-bold">Discover</h2>
        </div>
        <div class="w-80 mt-4 h-1 mb-10 bg-primary"></div>
        <div class="grid grid-cols-4 gap-x-4">
            <a href="/detail" class="bg-white border border-border rounded-3xl shadow relative overflow-hidden">
                <div
                    class="w-16 h-16 bg-primary absolute top-0 right-0 rounded-bl-3xl flex flex-col justify-center items-center text-bg3 font-bold">
                    <p class="text-sm">56%</p>
                    <p class="text-sm">OFF</p>
                </div>
                <div class="bg-bg1">
                    <img class="rounded-t-lg mx-auto" width="150px" src="{{ asset('images/produk1.png') }}"
                        alt="" />
                </div>
                <div class="p-5">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Galaxy S22 Ultra
                    </h5>
                    <div class="with-discount flex flex-row gap-x-2 items-center">
                        <p class="mb-3 font-bold text-lg">Rp19.800.000</p>
                        <p class="mb-3 font-bold text-md line-through text-light">Rp20.000.000</p>
                    </div>
                    <hr class="text-border mb-2">
                    <p class="mb-3 font-normal text-primary text-md">Hemat - Rp200.000</p>
                </div>
            </a>
            <a href="#" class="bg-white border border-border rounded-3xl shadow relative overflow-hidden">
                <div
                    class="w-16 h-16 bg-primary absolute top-0 right-0 rounded-bl-3xl flex flex-col justify-center items-center text-bg3 font-bold">
                    <p class="text-sm">56%</p>
                    <p class="text-sm">OFF</p>
                </div>
                <div class="bg-bg1">
                    <img class="rounded-t-lg mx-auto" width="150px" src="{{ asset('images/produk1.png') }}"
                        alt="" />
                </div>
                <div class="p-5">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Galaxy S22 Ultra
                    </h5>
                    <div class="with-discount flex flex-row gap-x-2 items-center">
                        <p class="mb-3 font-bold text-lg">Rp19.800.000</p>
                        <p class="mb-3 font-bold text-md line-through text-light">Rp20.000.000</p>
                    </div>
                    <hr class="text-border mb-2">
                    <p class="mb-3 font-normal text-primary text-md">Hemat - Rp200.000</p>
                </div>
            </a>
            <a href="#" class="bg-white border border-border rounded-3xl shadow relative overflow-hidden">
                <div
                    class="w-16 h-16 bg-primary absolute top-0 right-0 rounded-bl-3xl flex flex-col justify-center items-center text-bg3 font-bold">
                    <p class="text-sm">56%</p>
                    <p class="text-sm">OFF</p>
                </div>
                <div class="bg-bg1">
                    <img class="rounded-t-lg mx-auto" width="150px" src="{{ asset('images/produk1.png') }}"
                        alt="" />
                </div>
                <div class="p-5">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Galaxy S22 Ultra
                    </h5>
                    <div class="with-discount flex flex-row gap-x-2 items-center">
                        <p class="mb-3 font-bold text-lg">Rp19.800.000</p>
                        <p class="mb-3 font-bold text-md line-through text-light">Rp20.000.000</p>
                    </div>
                    <hr class="text-border mb-2">
                    <p class="mb-3 font-normal text-primary text-md">Hemat - Rp200.000</p>
                </div>
            </a>
            <a href="#" class="bg-white border border-border rounded-3xl shadow relative overflow-hidden">
                <div
                    class="w-16 h-16 bg-primary absolute top-0 right-0 rounded-bl-3xl flex flex-col justify-center items-center text-bg3 font-bold">
                    <p class="text-sm">56%</p>
                    <p class="text-sm">OFF</p>
                </div>
                <div class="bg-bg1">
                    <img class="rounded-t-lg mx-auto" width="150px" src="{{ asset('images/produk1.png') }}"
                        alt="" />
                </div>
                <div class="p-5">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Galaxy S22 Ultra
                    </h5>
                    <div class="with-discount flex flex-row gap-x-2 items-center">
                        <p class="mb-3 font-bold text-lg">Rp19.800.000</p>
                        <p class="mb-3 font-bold text-md line-through text-light">Rp20.000.000</p>
                    </div>
                    <hr class="text-border mb-2">
                    <p class="mb-3 font-normal text-primary text-md">Hemat - Rp200.000</p>
                </div>
            </a>
        </div>
    </div>
    {{ $produkList->links() }}
@endsection
