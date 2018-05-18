<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Container\Sicepla\Src\Producto;
use App\Container\Sicepla\Src\Compras;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Producto::all();
        return view('sicepla.ayudante.ayudante-productosVenta',compact('ventas'));
    }

    public function compras(){
        $compras = Compras::all()->where('FK_UsuarioId',Auth::user()->PK_id);
        return view('sicepla.ayudante.ayudante-productosComprar',compact('compras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(Auth::user()->PK_id);
        $producto = Producto::find($request['id']);
        $producto->cantidadExhibicion = $request['cantidadExhibicion'];
        $producto->cantidadComprar = $request['cantidadComprar'];
        $producto->save();
        $compra = new Compras;
        $compra::create([
            'cantidadComprar' => $request['cantidadComprar'],
            'precioComprarCliente' => $request['precioComprarCliente'],
            'FK_ProductoId' => $request['id'],
            'FK_UsuarioId' =>  Auth::user()->PK_id            
        ]);       
        return redirect()->route('compra.compras')->with('success','Compra Realizada Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produc = Producto::find($id);
         return view('sicepla.ayudante.ayudante-comprar',[
           'producto' => $produc,
         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
        Compras::destroy($id);
        return redirect()->route('compra.compras')->with('error','Producto Eliminado Correctamente');
    }
}
