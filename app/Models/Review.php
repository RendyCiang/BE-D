<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'nama',
        'rating',
        'comment',
        'book_id'
    ];

    function book(){
        return $this->belongsTo(Book::class);
    }

}
