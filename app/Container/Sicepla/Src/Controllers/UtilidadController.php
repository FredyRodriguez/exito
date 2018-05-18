<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Container\Sicepla\Src\Compras;
use App\Container\Sicepla\Src\Producto;

class UtilidadController extends Controller
{
    public function index()
    {

        $utilidades = Producto::
                    select('tbl_productos.name','tbl_compras.cantidadComprar','tbl_productos.precioProducto', 
                    'tbl_productos.precioProductoComprar')
                          ->join('tbl_compras','tbl_compras.FK_ProductoId','=','tbl_productos.id')
                          ->get();

        /*SELECT
            tbl_productos.`name`,
            tbl_compras.cantidadComprar,
            tbl_productos.precioProducto,
            tbl_productos.precioProductoComprar
            FROM
            tbl_compras
            INNER JOIN tbl_productos ON tbl_compras.FK_ProductoId = tbl_productos.id*/
        return view('sicepla.super-admin.super-admin-utilidad',compact(
            'utilidades'
        ));
    }
}
