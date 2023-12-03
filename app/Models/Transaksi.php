<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['produk', 'keranjang'];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }

    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class, 'id_keranjang');
    }
}
