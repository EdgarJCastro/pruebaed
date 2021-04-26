<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero_cuenta',
        'direccion',
        'telefono',

    ];

    public function Cliente()
    {
        return $this->belongsTo('App\Models\Cliente', 'id_cliente');
    }

    public function Banco()
    {
        return $this->belongsTo('App\Models\Banco', 'id_banco');
    }
}
