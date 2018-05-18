<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Container\Sicepla\Src\User;
use App\Container\Sicepla\Src\Producto;
use App\Container\Sicepla\Src\Compras;
use Illuminate\Support\Facades\Auth;
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
    public function reporteProductoCliente()
    {
        $productoClientes = Compras::where('FK_UsuarioId',Auth::user()->PK_id)->get();
        $pdf = PDF::loadView('pdf.reporteProductoCliente',compact('productoClientes'));
        return $pdf->stream('reporteProductoCliente.pdf');
    }
    public function reporteUtilidad()
    {
        $reporteUtilidades = Producto::all();
        $pdf = PDF::loadView('pdf.reporteUtilidad',compact('reporteUtilidades','Utilidad'));
        return $pdf->stream('reporteUtilidad.pdf');
    }
}
