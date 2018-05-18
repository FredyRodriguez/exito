<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UtilidadController extends Controller
{
    public function index()
    {
        
        return view('sicepla.super-admin.super-admin-utilidad');
    }
}
