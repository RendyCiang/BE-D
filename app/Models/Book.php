<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'nama',
        'penerbit',
        'kota_terbit',
        'tahun_terbit',
        'isbn',
        'harga',
        'stok',
        'photo'
    ];

    function reviews(){
        return $this->hasMany(Review::class);
    }
    function pengarang(){
        return $this->belongsToMany(Pengarang::class, 'buku_pengarang');
    }
}
