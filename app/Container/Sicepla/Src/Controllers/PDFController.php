<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Container\Sicepla\Src\User;
use PDF;

class PDFController extends Controller
{
    public function reporteProveedor()
    {
        $proveedores = User::where('FK_RolesId','4')->get();
        $pdf = PDF::loadView('pdf.reporteProveedores',compact('proveedores'));
        return $pdf->stream('proveedores.pdf');
    }
}
