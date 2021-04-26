<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono'
    ];

    public function Cuenta()
    {
    return $this->hasMany('App\Models\Cuenta', 'id_banco');
    }
}
