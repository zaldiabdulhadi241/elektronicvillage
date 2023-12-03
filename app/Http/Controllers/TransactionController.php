<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $data = Transaksi::latest()->get()->load('produk', 'keranjang');

        $total_harga = Keranjang::sum('total_harga');



        return view('user.transaksi', [
            'transaksis' => $data,
            'total_harga' => $total_harga,
            'keranjangs' => Keranjang::latest()->where('id_user', Auth::user()->id)->get(),
        ]);
    }

    public function store(Request $request)
    {
        if (Transaksi::get()->count()) {
            foreach (Transaksi::get() as $transaksi) {
                if ($transaksi->id == $request->id_keranjang) {
                    return redirect('/user/transaksi/');
                } else {
                    Transaksi::create($request->all());
                    return redirect('/user/transaksi/');
                }
            }
        } else {
            Transaksi::create($request->all());
            return redirect('/user/transaksi/');
        }
    }
}
