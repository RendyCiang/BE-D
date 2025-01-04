<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'nama',
        'author',
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
}
