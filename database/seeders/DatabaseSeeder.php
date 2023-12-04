<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use App\Models\Kategori;
use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'nama' => 'Zaldi Abdul Hadi',
            'username' => 'zaldiabdulhadi',
            'email' => 'zaldiabdulhadi12@gmail.com',
            'alamat' => 'Jl Kompos RT 11 RW 08, Lenteng Agung, Kec. JagakarsamJl Kompos RT 11 RW 08, Lenteng Agung, Kec. Jagakarsa',
            'telp' => '+6285774263820',
            'password' => 'kompos000',
            'role' => 'admin',
        ]);

        \App\Models\User::create([
            'nama' => 'Arya Permana Putra',
            'username' => 'aryapermana',
            'email' => 'aryapermana@gmail.com',
            'password' => '12345678',
        ]);

        Kategori::create([
            'nama_kategori' => 'Handphone',
            'gambar_kategori' => 'handphone.png'
        ]);
        Kategori::create([
            'nama_kategori' => 'Tablet',
            'gambar_kategori' => 'tablet.png'
        ]);
        Kategori::create([
            'nama_kategori' => 'Aksesoris',
            'gambar_kategori' => 'aksesoris.png'
        ]);
        Kategori::create([
            'nama_kategori' => 'Kamera',
            'gambar_kategori' => 'kamera.png'
        ]);
        Kategori::create([
            'nama_kategori' => 'Laptop',
            'gambar_kategori' => 'laptop.png'
        ]);
        Kategori::create([
            'nama_kategori' => 'TV & Audio',
            'gambar_kategori' => 'tv.png'
        ]);

        Produk::create([
            'nama_produk' => 'Galaxy S22 Ultra',
            'slug' => 'galaxy-s22-ultra',
            'deskripsi_produk' => 'Ready Stok (selama iklan ini masih ada) Produk Baru dan Segel , 100% Original (IMEI terdaftar)Warna bisa di pilih saat Memesan Paket aman untuk dikirim ke seluruh Indonesia (dilapisi Bubble wrap) Gratis Ram/memori internal : -Samsung M14 5G4GB/64GB4GB/128GB6GB/128GBGaransi Resmi Samsung 1 TahunSpesifikasi :NETWORKTechnology GSM / HSPA / LTE / 5G2G bands GSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2 (dual sim model only)3G bands HSDPA 850 / 900 / 1700(AWS) / 1900 / 21004G bands 1, 2, 3, 4, 5, 7, 8, 12, 17, 20, 26, 28, 38, 40, 41, 665G bands 1, 3, 5, 7, 8, 20, 28, 38, 40, 41, 66, 77, 78 SA/NSASpeed HSPA, LTE, 5GLAUNCHAnnounced 2023, March 08Status Available. Released 2023, March 08BODYDimensions 166.8 x 77.2 x 9.4 mm (6.57 x 3.04 x 0.37 in)Weight 206 g (7.27 oz)Build Glass front (Gorilla Glass 5), plastic back, plastic frameSIM Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)DISPLAYType PLS LCD, 90HzSize 6.6 inches, 104.9 cm2 (~81.5% screen-to-body ratio)Resolution 1080 x 2408 pixels, 20:9 ratio (~400 ppi density)Protection Corning Gorilla Glass 5PLATFORMOS Android 13, One UI core 5.1Chipset Exynos 1330 (5nm)CPU Octa-core (2x2.4 GHz Cortex-A78 & 6x2.0 GHz Cortex-A55)GPU Mali-G68 MP2MEMORYCard slot microSDHC (dedicated slot)Internal 64GB 4GB RAM, 128GB 4GB RAM, 128GB 6GB RAMMAIN CAMERATriple 50 MP, f/1.8, (wide), PDAF2 MP, f/2.4, (macro)2 MP, f/2.4, (depth)Features LED flash, panorama, HDRVideo 1080p@30fpsSELFIE CAMERASingle 13 MP, f/2.0, (wide)Video 1080p@30fpsSOUNDLoudspeaker Yes3.5mm jack YesCOMMSWLAN Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi DirectBluetooth 5.2, A2DP, LEPositioning GPS, GLONASS, GALILEO, BDS, QZSS, NavICNFC YesRadio UnspecifiedUSB USB Type-C 2.0FEATURESSensors Fingerprint (side-mounted), accelerometer, gyro, proximity, compassMessaging SMS(threaded view), MMS, Email, Push Email, IMBrowser HTML5BATTERYType Li-Po 6000 mAh, non-removableCharging 15W wired - international',
            'stok' => 8,
            'id_kategori' => 1,
            'id_brand' => 1,
            'foto_produk' => 'produk1.png',
            'harga' => 19800000,
        ]);
        Produk::create([
            'nama_produk' => 'Galaxy M13 (4GB | 64 GB )',
            'slug' => 'galaxy-m13',
            'deskripsi_produk' => 'Ready Stok (selama iklan ini masih ada) Produk Baru dan Segel , 100% Original (IMEI terdaftar)Warna bisa di pilih saat Memesan Paket aman untuk dikirim ke seluruh Indonesia (dilapisi Bubble wrap) Gratis Ram/memori internal : -Samsung M14 5G4GB/64GB4GB/128GB6GB/128GBGaransi Resmi Samsung 1 TahunSpesifikasi :NETWORKTechnology GSM / HSPA / LTE / 5G2G bands GSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2 (dual sim model only)3G bands HSDPA 850 / 900 / 1700(AWS) / 1900 / 21004G bands 1, 2, 3, 4, 5, 7, 8, 12, 17, 20, 26, 28, 38, 40, 41, 665G bands 1, 3, 5, 7, 8, 20, 28, 38, 40, 41, 66, 77, 78 SA/NSASpeed HSPA, LTE, 5GLAUNCHAnnounced 2023, March 08Status Available. Released 2023, March 08BODYDimensions 166.8 x 77.2 x 9.4 mm (6.57 x 3.04 x 0.37 in)Weight 206 g (7.27 oz)Build Glass front (Gorilla Glass 5), plastic back, plastic frameSIM Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)DISPLAYType PLS LCD, 90HzSize 6.6 inches, 104.9 cm2 (~81.5% screen-to-body ratio)Resolution 1080 x 2408 pixels, 20:9 ratio (~400 ppi density)Protection Corning Gorilla Glass 5PLATFORMOS Android 13, One UI core 5.1Chipset Exynos 1330 (5nm)CPU Octa-core (2x2.4 GHz Cortex-A78 & 6x2.0 GHz Cortex-A55)GPU Mali-G68 MP2MEMORYCard slot microSDHC (dedicated slot)Internal 64GB 4GB RAM, 128GB 4GB RAM, 128GB 6GB RAMMAIN CAMERATriple 50 MP, f/1.8, (wide), PDAF2 MP, f/2.4, (macro)2 MP, f/2.4, (depth)Features LED flash, panorama, HDRVideo 1080p@30fpsSELFIE CAMERASingle 13 MP, f/2.0, (wide)Video 1080p@30fpsSOUNDLoudspeaker Yes3.5mm jack YesCOMMSWLAN Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi DirectBluetooth 5.2, A2DP, LEPositioning GPS, GLONASS, GALILEO, BDS, QZSS, NavICNFC YesRadio UnspecifiedUSB USB Type-C 2.0FEATURESSensors Fingerprint (side-mounted), accelerometer, gyro, proximity, compassMessaging SMS(threaded view), MMS, Email, Push Email, IMBrowser HTML5BATTERYType Li-Po 6000 mAh, non-removableCharging 15W wired - international',
            'stok' => 14,
            'id_kategori' => 1,
            'id_brand' => 1,
            'foto_produk' => 'produk2.png',
            'harga' => 3400000,
        ]);
        Produk::create([
            'nama_produk' => 'Galaxy S21 Pro',
            'slug' => 'galaxy-s21-pro',
            'deskripsi_produk' => 'Ready Stok (selama iklan ini masih ada) Produk Baru dan Segel , 100% Original (IMEI terdaftar)Warna bisa di pilih saat Memesan Paket aman untuk dikirim ke seluruh Indonesia (dilapisi Bubble wrap) Gratis Ram/memori internal : -Samsung M14 5G4GB/64GB4GB/128GB6GB/128GBGaransi Resmi Samsung 1 TahunSpesifikasi :NETWORKTechnology GSM / HSPA / LTE / 5G2G bands GSM 850 / 900 / 1800 / 1900 - SIM 1 & SIM 2 (dual sim model only)3G bands HSDPA 850 / 900 / 1700(AWS) / 1900 / 21004G bands 1, 2, 3, 4, 5, 7, 8, 12, 17, 20, 26, 28, 38, 40, 41, 665G bands 1, 3, 5, 7, 8, 20, 28, 38, 40, 41, 66, 77, 78 SA/NSASpeed HSPA, LTE, 5GLAUNCHAnnounced 2023, March 08Status Available. Released 2023, March 08BODYDimensions 166.8 x 77.2 x 9.4 mm (6.57 x 3.04 x 0.37 in)Weight 206 g (7.27 oz)Build Glass front (Gorilla Glass 5), plastic back, plastic frameSIM Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)DISPLAYType PLS LCD, 90HzSize 6.6 inches, 104.9 cm2 (~81.5% screen-to-body ratio)Resolution 1080 x 2408 pixels, 20:9 ratio (~400 ppi density)Protection Corning Gorilla Glass 5PLATFORMOS Android 13, One UI core 5.1Chipset Exynos 1330 (5nm)CPU Octa-core (2x2.4 GHz Cortex-A78 & 6x2.0 GHz Cortex-A55)GPU Mali-G68 MP2MEMORYCard slot microSDHC (dedicated slot)Internal 64GB 4GB RAM, 128GB 4GB RAM, 128GB 6GB RAMMAIN CAMERATriple 50 MP, f/1.8, (wide), PDAF2 MP, f/2.4, (macro)2 MP, f/2.4, (depth)Features LED flash, panorama, HDRVideo 1080p@30fpsSELFIE CAMERASingle 13 MP, f/2.0, (wide)Video 1080p@30fpsSOUNDLoudspeaker Yes3.5mm jack YesCOMMSWLAN Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi DirectBluetooth 5.2, A2DP, LEPositioning GPS, GLONASS, GALILEO, BDS, QZSS, NavICNFC YesRadio UnspecifiedUSB USB Type-C 2.0FEATURESSensors Fingerprint (side-mounted), accelerometer, gyro, proximity, compassMessaging SMS(threaded view), MMS, Email, Push Email, IMBrowser HTML5BATTERYType Li-Po 6000 mAh, non-removableCharging 15W wired - international',
            'stok' => 25,
            'id_kategori' => 1,
            'id_brand' => 1,
            'foto_produk' => 'produk3.png',
            'harga' => 5000000,
        ]);
        Produk::create([
            'nama_produk' => 'SHARP AC SPLIT 1/2 PK STANDARD WHITE',
            'slug' => 'sharp-ac-split-12-pk-standard-white',
            'deskripsi_produk' => 'Size: 1/2 PK Color: WHITE Berat: 12000 GR Features: LED DISPLAY TEMPERATURE CAPACITY/COOLING: 5000 BTU Capacity: 1/2 PK Power Consumption: 344 W Voltase: 220 - 240 V DIMENSI 19cm X 71cm X 28cm BERAT 12000 gr DEKSRIPSI PRODUK : R32 Eco New Refrigerant Turbo Cooling Self Diagnosis Ex-Fan Funcition',
            'stok' => 5,
            'id_kategori' => 6,
            'id_brand' => 1,
            'foto_produk' => 'produk3.png',
            'harga' => 3499000,
        ]);
        Brand::create([
            'nama_brand' => 'Xiaomi',
        ]);
        Brand::create([
            'nama_brand' => 'Samsung',
        ]);
    }
}
