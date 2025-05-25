<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileLine extends Model
{
    use HasFactory;
    protected $fillable = ['phone_number', 'operator', 'state'];

    /*
    public function movimientos()
    {
        return $this->hasMany(Movimiento::class);
    }*/
}
