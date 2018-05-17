<?php

namespace App\Container\Sicepla\Src;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $table =  "TBL_Compras";
    protected $primarykey = "id";
    protected $fillable = ['cantidadComprar','precioComprarCliente','FK_ProductoId','FK_UsuarioId','created_at'];

    public function usuario(){
        return $this->belongsTo(User::class,'FK_UsuarioId','id');
    }
    public function producto(){
        return $this->belongsTo(Producto::class,'FK_ProductoId','id');
    }
}
