<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['kategori', 'brand'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'id_brand', 'id');
    }

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class, 'id_keranjang', 'id');
    }

    public function transaksi()
    {
        return $this->hasOne(Transaksi::class, 'id_produk');
    }
}
