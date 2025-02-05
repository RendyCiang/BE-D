<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengarang extends Model
{
    protected $fillable = [
        'nama', 
        'umur'
    ];

    function books(){
        return $this->belongsToMany(Book::class, 'buku_pengarang');
    }


}
