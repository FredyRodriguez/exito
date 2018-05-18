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

        $utilidades = 
        DB::select(DB::raw("SELECT
        tbl_productos.name as nameProduct,
        tbl_productos.precioProducto as precioProducto,
        tbl_productos.precioProductoComprar as precioProductoComprar,
        tbl_compras.cantidadComprar as CantidadComprar,
        ((tbl_compras.cantidadComprar * tbl_productos.precioProductoComprar)-(tbl_compras.cantidadComprar * tbl_productos.precioProducto)) as Utilidad
        FROM
        tbl_productos
        INNER JOIN tbl_compras ON tbl_compras.FK_ProductoId = tbl_productos.id"));

        return view('sicepla.super-admin.super-admin-utilidad',compact(
            'utilidades'
        ));
    }
}
