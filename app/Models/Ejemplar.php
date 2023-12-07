<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    protected $fillable = ['Codigo', 'Localizacion', 'book_id'];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
