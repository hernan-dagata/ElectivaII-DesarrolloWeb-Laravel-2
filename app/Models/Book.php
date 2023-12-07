<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['Codigo', 'Titulo', 'ISBN', 'Paginas', 'editorial_id', 'author_id'];

    public function editorial()
    {
        return $this->belongsTo(Editorial::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
