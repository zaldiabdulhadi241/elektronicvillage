<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    public function index(User $user)
    {
        $data = Keranjang::latest()->where('id_user', $user->id)->get()->load('produk', 'user');

        $total_harga = Keranjang::sum('total_harga');


        return view('user.keranjang', [
            'keranjangs' => collect($data),
            't_harga' => $total_harga
        ]);
    }

    public function store(Request $request)
    {
        $request['total_harga'] *= $request['jumlah_barang'];

        Keranjang::create($request->all());

        return redirect('/user/keranjang/' . Auth::user()->id)->with('success-add-cart', 'Berhasil Menambah Produk ke Keranjang');
    }

    public function destroy(Keranjang $keranjang)
    {
        Keranjang::where('id', $keranjang->id)->delete();
        Transaksi::where('id_keranjang', $keranjang->id)->delete();
        return redirect('/user/keranjang/' . Auth::user()->id)->with('success-delete-cart', 'Berhasil Hapus Produk dari Keranjang');
    }
}
