<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = ['ci', 'name', 'email', 'department'];

    /*
    public function movimientos()
    {
        return $this->hasMany(Movimientos::class);
    }*/
}
