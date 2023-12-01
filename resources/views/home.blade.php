    @extends('layouts.main')

    @section('topbar')
        @include('partials.topbar')
    @endsection

    @section('container')
        <div class="container px-32 mx-auto my-5">
            @include('partials.categories.categories-dropdown')
            @include('partials.carousel')
            <div class="best-promo mb-28">
                <div class="flex flex-row justify-between">
                    <h2 class="text-text text-xl font-bold">Dapatkan penawaran terbaik untuk <span
                            class="text-primary">Handphone</span>
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
            <div class="kategori-teratas mb-28">
                <div class="flex flex-row justify-between">
                    <h2 class="text-text text-xl font-bold">Berbelanja dari <span class="text-primary">Kategori
                            Teratas</span>
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
                <div class="w-64 mt-4 h-1 mb-10 bg-primary"></div>
                @include('partials.categories.categories-lists')
            </div>
            <div class="brand-handphone-teratas">
                <div class="flex flex-row justify-between">
                    <h2 class="text-text text-xl font-bold">Brand <span class="text-primary">Handphone Teratas</span>
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
                <div class="w-48 mt-4 h-1 mb-10 bg-primary"></div>
                @include('partials.brand.carousel-brand')
            </div>
            <div class="rekomendasi-harian mb-28">
                <div class="flex flex-row justify-between">
                    <h2 class="text-text text-xl font-bold">Rekomendasi <span class="text-primary">Harian</span>
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
                <div class="w-48 mt-4 h-1 mb-10 bg-primary"></div>
                <div class="grid grid-cols-4 gap-4">
                    <a href="#" class="bg-white border border-border rounded-3xl shadow relative overflow-hidden">
                        <div class="bg-bg1">
                            <img class="rounded-t-lg mx-auto" width="150px" src="{{ asset('images/produk1.png') }}"
                                alt="" />
                        </div>
                        <div class="p-5">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Galaxy S22 Ultra
                            </h5>
                            <p class="mb-3 font-bold text-lg">Rp19.800.000</p>
                            <hr class="text-border mb-2">
                            <p class="mb-3 font-normal text-primary text-md">Hemat - Rp200.000</p>
                        </div>
                    </a>
                    <a href="#" class="bg-white border border-border rounded-3xl shadow relative overflow-hidden">
                        <div class="bg-bg1">
                            <img class="rounded-t-lg mx-auto" width="150px" src="{{ asset('images/produk1.png') }}"
                                alt="" />
                        </div>
                        <div class="p-5">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Galaxy S22
                                Ultra
                            </h5>
                            <p class="mb-3 font-bold text-lg">Rp19.800.000</p>
                            <hr class="text-border mb-2">
                            <p class="mb-3 font-normal text-primary text-md">Hemat - Rp200.000</p>
                        </div>
                    </a>
                    <a href="#" class="bg-white border border-border rounded-3xl shadow relative overflow-hidden">
                        <div class="bg-bg1">
                            <img class="rounded-t-lg mx-auto" width="150px" src="{{ asset('images/produk1.png') }}"
                                alt="" />
                        </div>
                        <div class="p-5">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Galaxy S22
                                Ultra
                            </h5>
                            <p class="mb-3 font-bold text-lg">Rp19.800.000</p>
                            <hr class="text-border mb-2">
                            <p class="mb-3 font-normal text-primary text-md">Hemat - Rp200.000</p>
                        </div>
                    </a>
                    <a href="#" class="bg-white border border-border rounded-3xl shadow relative overflow-hidden">
                        <div class="bg-bg1">
                            <img class="rounded-t-lg mx-auto" width="150px" src="{{ asset('images/produk1.png') }}"
                                alt="" />
                        </div>
                        <div class="p-5">
                            <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Galaxy S22
                                Ultra
                            </h5>
                            <p class="mb-3 font-bold text-lg">Rp19.800.000</p>
                            <hr class="text-border mb-2">
                            <p class="mb-3 font-normal text-primary text-md">Hemat - Rp200.000</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @endsection
