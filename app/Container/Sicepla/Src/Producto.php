<?php

namespace App\Container\Sicepla\Src;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{    
    protected $table =  "TBL_Productos";
    protected $primarykey = "id";
    protected $fillable = ['name','precioProducto','cantidadBodega','cantidadExhibicion','precioProductoComprar','totalProducto','cantidadComprar','FK_UsuarioId'];

    public function usuario(){
        return $this->belongsTo(User::class,'FK_UsuarioId','id');
    }
    public function compra(){
        return $this->hasOne(Compras::class,'FK_ProductoId','id');
    }
}
