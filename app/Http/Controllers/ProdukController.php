<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::latest()->get()->load('kategori');
        return view('admin.produk.index', [
            'produks' => $data,
        ]);
    }

    public function tambah_produk()
    {
        $data = Kategori::latest()->get();

        return view('admin.produk.tambah', [
            'kategoris' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image'
        ]);

        $request['slug'] = str_slug($request->nama_produk);
        $data = $request->all();

        if ($request->hasFile('foto_produk')) {
            $reqName = $request->file('foto_produk')->getClientOriginalName();
            $request->file('foto_produk')->storeAs('img', $reqName);
            $data['foto_produk'] = $reqName;
        }

        Produk::create($data);
        return redirect('/admin/produk/');
    }

    public function edit(Produk $produk)
    {
        $data = Produk::where('id', $produk->id)->first()->load('kategori');
        $dataKategori = Kategori::latest()->get();
        return view('admin.produk.edit', [
            'produk' => $data,
            'kategoris' => $dataKategori,
        ]);
    }

    public function update(Produk $produk, Request $request)
    {
        $request->validate([
            'image' => 'image'
        ]);
        $oldImage = Produk::where('id', $produk->id)->first()->imageUrl;
        $data = request()->except(['_token', '_method']);

        if ($request->hasFile('imageUrl')) {
            Storage::delete('img/' . $oldImage);
            $reqName = $request->file('imageUrl')->getClientOriginalName();
            $request->file('imageUrl')->storeAs('images', $reqName);
            $data['imageUrl'] = $reqName;
        }

        Produk::where('id', $produk->id)->update($data);
        return redirect('/admin/produk/');
    }

    public function destroy(Produk $produk)
    {
        Produk::where('id', $produk->id)->delete();
        return redirect('/admin/produk');
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
