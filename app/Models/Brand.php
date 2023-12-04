<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_brand', 'id');
    }

    public function kategori()
    {
        return $this->hasMany(Kategori::class, 'id_brand', 'id');
    }
}
