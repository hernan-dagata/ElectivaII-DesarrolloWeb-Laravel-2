<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = ['customer_id', 'ejemplar_id', 'FechaPrestamo', 'FechaDevolucion'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function ejemplar()
    {
        return $this->belongsTo(Ejemplar::class);
    }
}
