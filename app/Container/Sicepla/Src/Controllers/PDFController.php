<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Container\Sicepla\Src\User;
use App\Container\Sicepla\Src\Producto;
use PDF;

class PDFController extends Controller
{
    public function reporteProveedor()
    {
        $proveedores = User::where('FK_RolesId','4')->get();
        $pdf = PDF::loadView('pdf.reporteProveedores',compact('proveedores'));
        return $pdf->stream('proveedores.pdf');
    }
    public function reporteProducto()
    {
        $productos = Producto::all();
        $pdf = PDF::loadView('pdf.reporteProductos',compact('productos'));
        return $pdf->stream('productos.pdf');
    }
    public function reporteProductoAdmin()
    {
        $productos = Producto::all();
        $pdf = PDF::loadView('pdf.reporteProductosAdmin',compact('productos'));
        return $pdf->stream('productos.pdf');
    }
    public function reporteCliente()
    {
        $clientes = User::where('FK_RolesId','3')->get();
        $pdf = PDF::loadView('pdf.reporteCliente',compact('clientes'));
        return $pdf->stream('clientes.pdf');
    }
}
