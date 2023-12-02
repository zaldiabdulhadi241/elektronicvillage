@extends('layouts.main')

@section('container')
    <div class="flex flex-col gap-y-8 px-32 py-3">
        <div class="flex flex-row justify-start items-start">
            <div class="flex flex-col">
                <img class="mb-3" src="{{ asset('images/detail1.png') }}" width="405px" height="300px" alt="">
                <div class="flex flex-row gap-x-2">
                    <img clas src="{{ asset('images/detail1.png') }}" width="100px" height="100px" alt="">
                    <img clas src="{{ asset('images/detail1.png') }}" width="100px" height="100px" alt="">
                    <img clas src="{{ asset('images/detail1.png') }}" width="100px" height="100px" alt="">
                </div>
            </div>
            <div class="flex flex-col ms-24">
                <p class="text-primary font-semibold text-xl">Hemat - Rp200.000</p>
                <h1 class="text-4xl text-heading font-semibold mb-3">Galaxy M13 (4GB | 64 GB )</h1>
                <div class="flex flex-row text-3xl font-bold mb-5">
                    <h3 class="text-heading me-2">Rp19.800.000</h3>
                    <h3 class="text-light line-through">Rp20.000.000</h3>
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
                            <p>Tersisa 8 Pcs</p>
                        </div>
                    </div>
                    <div class="flex flex-row items-center text-light justify-start gap-x-8">
                        <p>Jumlah</p>
                        <div class="border p-2">
                            <input type="number" name="qty" value="1">
                        </div>
                    </div>
                </div>
                <div class="flex flex-row gap-x-4 items-center">
                    <form action="" method="POST">
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
                    <form action="/user/keranjang">
                        <button class="px-11 py-3 border border-primary bg-primary text-bg3">Beli Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
        <h3 class="text-heading font-medium">Spesifikasi Produk</h3>
        <div class="flex flex-col">
            <h3 class="text-light">Kategori</h3>
            <p class="text-primary font-semibold mb-8">Handphone</p>
            <h3 class="text-light">Stok</h3>
            <p>8</p>
        </div>
        <h3 class="text-heading font-medium">Deskripsi Produk</h3>
        <div class="flex flex-col">
            <p class="text-justify text-light">
                Ready Stok (selama iklan ini masih ada)

                Produk Baru dan Segel , 100% Original (IMEI terdaftar)Warna bisa di pilih saat Memesan Paket aman untuk
                dikirim ke seluruh Indonesia (dilapisi Bubble wrap) Gratis Ram/memori internal : -Samsung M14
                5G4GB/64GB4GB/128GB6GB/128GBGaransi Resmi Samsung 1 TahunSpesifikasi :NETWORKTechnology GSM / HSPA / LTE /
                5G2G bands GSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2 (dual sim model only)3G bands HSDPA 850 / 900 /
                1700(AWS) / 1900 / 21004G bands 1, 2, 3, 4, 5, 7, 8, 12, 17, 20, 26, 28, 38, 40, 41, 665G bands 1, 3, 5, 7,
                8, 20, 28, 38, 40, 41, 66, 77, 78 SA/NSASpeed HSPA, LTE, 5GLAUNCHAnnounced 2023, March 08Status Available.
                Released 2023, March 08BODYDimensions 166.8 x 77.2 x 9.4 mm (6.57 x 3.04 x 0.37 in)Weight 206 g (7.27
                oz)Build Glass front (Gorilla Glass 5), plastic back, plastic frameSIM Single SIM (Nano-SIM) or Dual SIM
                (Nano-SIM, dual stand-by)DISPLAYType PLS LCD, 90HzSize 6.6 inches, 104.9 cm2 (~81.5% screen-to-body
                ratio)Resolution 1080 x 2408 pixels, 20:9 ratio (~400 ppi density)Protection Corning Gorilla Glass
                5PLATFORMOS Android 13, One UI core 5.1Chipset Exynos 1330 (5nm)CPU Octa-core (2x2.4 GHz Cortex-A78 & 6x2.0
                GHz Cortex-A55)GPU Mali-G68 MP2MEMORYCard slot microSDHC (dedicated slot)Internal 64GB 4GB RAM, 128GB 4GB
                RAM, 128GB 6GB RAMMAIN CAMERATriple 50 MP, f/1.8, (wide), PDAF2 MP, f/2.4, (macro)2 MP, f/2.4,
                (depth)Features LED flash, panorama, HDRVideo 1080p@30fpsSELFIE CAMERASingle 13 MP, f/2.0, (wide)Video
                1080p@30fpsSOUNDLoudspeaker Yes3.5mm jack YesCOMMSWLAN Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi
                DirectBluetooth 5.2, A2DP, LEPositioning GPS, GLONASS, GALILEO, BDS, QZSS, NavICNFC YesRadio UnspecifiedUSB
                USB Type-C 2.0FEATURESSensors Fingerprint (side-mounted), accelerometer, gyro, proximity, compassMessaging
                SMS(threaded view), MMS, Email, Push Email, IMBrowser HTML5BATTERYType Li-Po 6000 mAh, non-removableCharging
                15W wired - international
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
                <a href="#" class="bg-white border border-border rounded-3xl shadow relative overflow-hidden">
                    <div class="bg-bg1">
                        <img class="rounded-t-lg mx-auto" width="150px" src="{{ asset('images/produk1.png') }}"
                            alt="" />
                    </div>
                    <div class="p-5">
                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Galaxy S22 Ultra
                        </h5>
                        <div class="with-discount flex flex-row gap-x-2 items-center">
                            <p class="mb-3 font-bold text-lg">Rp20.000.000</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
