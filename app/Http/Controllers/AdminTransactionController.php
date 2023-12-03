<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class AdminTransactionController extends Controller
{
    public function index()
    {
        $data = Transaksi::latest()->get()->load('produk', 'keranjang');

        $total_harga = Keranjang::sum('total_harga');



        return view('admin.transaksi.index', [
            'transaksis' => $data,
            'total_harga' => $total_harga,
            'keranjangs' => Keranjang::latest()->get(),
        ]);
    }
}
