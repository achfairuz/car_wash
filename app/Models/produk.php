<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    // Nama tabel secara eksplisit jika nama tabel tidak mengikuti konvensi penamaan Laravel
    protected $table = 'produks';

    // Mass assignable attributes
    protected $fillable = ['nama_produk', 'deskripsi', 'image', 'stok', 'harga_produk'];

    // Relasi dengan model Cart
    public function carts()
    {
        return $this->hasMany(cart::class);
    }
}
