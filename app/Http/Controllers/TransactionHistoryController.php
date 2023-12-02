<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionHistoryController extends Controller
{
    public function index()
    {
        return view('user.transaction-history');
    }
}
