<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function produk()
    {
        $this->hasMany(Produk::class, 'id_kategori', 'id');
    }

    public function brand()
    {
        $this->hasMany(Brand::class);
    }
}
