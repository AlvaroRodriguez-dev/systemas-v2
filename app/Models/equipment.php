<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipment extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'manufacturer', 'model', 'serie_number', 'ram', 'store', 'state', 'puchase_date', 'note'];
/*
    public function movimientos()
    {
        return $this->hasMany(Movimiento::class);
    } */
}
