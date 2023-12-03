<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    public function index()
    {
        return;
    }
    public function store()
    {
        return;
    }
    public function update()
    {
        return;
    }
    public function destroy()
    {
        return;
    }

    public function show(Produk $produk)
    {
        return view('produk.detail', [
            'produk' => $produk,
            'produkList' => Produk::latest()->get()
        ]);
    }

    public function addToCart(Produk $produk)
    {
        $data = Keranjang::create([
            'id_user' => Auth::user()->id,
            'id_produk' => $produk->id,
            'jumlah_barang' => 1,
            'total_harga' => 20000000,
        ]);
        return view('user.keranjang')->with('success-add-cart', 'Berhasil Menambahkan Produk ke Keranjang');
    }
}
