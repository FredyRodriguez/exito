<?php

namespace App\Container\Sicepla\Src;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    public function usuario(){
        return $this->belongsTo(User::class,'FK_UsuarioId','id');
    }
    public function producto(){
        return $this->belongsTo(User::class,'FK_ProductoId','id');
    }
}
