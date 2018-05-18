<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Container\Sicepla\Src\Compras;
use App\Container\Sicepla\Src\Producto;
use Illuminate\Support\Facades\DB;

class UtilidadController extends Controller
{
    public function index()
    {

        $utilidades = Producto::
                    select('tbl_productos.name as nameProduct','tbl_compras.cantidadComprar as CantidadComprar','tbl_productos.precioProducto as precioProducto', 
                    'tbl_productos.precioProductoComprar as precioProductoComprar')
                          ->join('tbl_compras','tbl_compras.FK_ProductoId','=','tbl_productos.id')
                          ->get();

        $Utilidad = Producto::
                    select(DB::raw('(((tbl_productos.cantidadComprar * tbl_productos.precioProductoComprar)-(tbl_productos.cantidadComprar * tbl_productos.precioProducto))) as Utilidad'))
                        ->get();
        
        /*$precio1 = Producto::
                    select('tbl_productos.precioProducto')
                    ->get();
        
        $cantidad = Compras::
                    select('tbl_compras.cantidadComprar')
                    ->get();

        $precio2 = Producto::
                    select('tbl_productos.precioProductoComprar')
                    ->get();

        $totales = 0;

        $totales = ($cantidad*$precio1)-($cantidad*$precio2);




        SELECT
            tbl_productos.`name`,
            tbl_compras.cantidadComprar,
            tbl_productos.precioProducto,
            tbl_productos.precioProductoComprar
            FROM
            tbl_compras
            INNER JOIN tbl_productos ON tbl_compras.FK_ProductoId = tbl_productos.id*/
        return view('sicepla.super-admin.super-admin-utilidad',compact(
            'utilidades', 
            'totales',
            'Utilidad'
        ));
    }
}
