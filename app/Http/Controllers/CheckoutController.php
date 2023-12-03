<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function process(Request $request, Transaksi $transaction)
    {
        $data = $request->all();


        $pendingTransaction = Transaksi::latest()->get()->where('status', 'pending')[0];


        // $transaction = Transaksi::create([
        //     'id_user' => Auth::user()->id,
        //     'id_produk' => 1,
        //     'jumlah_barang' => 1,
        //     'total_harga' => 100000,
        //     'status' => 'pending',
        // ]);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('midtrans.isProduction');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = config('midtrans.isSanitized');
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = config('midtrans.is3ds');

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $pendingTransaction->total_harga,
            ),
            'customer_details' => array(
                'first_name'       => Auth::user()->nama,
                'email'        => Auth::user()->email,
            )
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $pendingTransaction->snap_token = $snapToken;

        $pendingTransaction->save();

        Keranjang::where('id_user', Auth::user()->id)->delete();

        return redirect()->route('checkout', $pendingTransaction->id);
    }

    public function checkout(Transaksi $transaction)
    {
        $products = config('products');
        $product = collect($products)->firstWhere('id', $transaction->product_id);


        return view('user.checkout',  compact('transaction', 'product'));
    }

    public function success(Transaksi $transaction)
    {
        $transaction->status = 'success';
        $transaction->save();

        $stokLatest = $transaction->produk->stok - $transaction->jumlah_barang;

        Produk::where('id', $transaction->produk->id)->update([
            'stok' => $stokLatest,
        ]);



        return view('user.transaction-history', [
            'transaksis' => Transaksi::latest()->get()
        ])->with('success-payment', 'Pembayaran Berhasil');
    }
}
