<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionHistoryController extends Controller
{
    public function index()
    {
        $data = Transaksi::latest()->get()->where('id_user', Auth::user()->id);
        return view('user.transaction-history', [
            'transaksis' => $data,
        ]);
    }
}
