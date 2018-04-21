<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Container\Sicepla\Src\User;
use App\Container\Sicepla\Src\Producto;
use App\Container\Sicepla\Src\Proveedor;
use App\Container\Sicepla\Src\Requests\ProductoStoreRequest;
use App\Container\Sicepla\Src\Requests\ProductoUpdateRequest;
use App\Container\Sicepla\Src\Requests\PedirUpdateRequest;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $productos = Producto::where('FK_UsuarioId',$id)->get();
        return view('sicepla.super-admin.super-admin-producto',compact('productos'));
        /*return view('sicepla.super-admin.super-admin-producto', [
            'user' => $user->load('productos'),
        ]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($users)
    {
        return view('sicepla.super-admin.super-admin-crearProduc',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store (ProductoStoreRequest $request)
    {
        $producto = new Producto;
        $producto::create([
            'name' => $request['name'],
            'precioProducto' => $request['precioProducto'],
            'cantidadBodega' => $request['cantidadBodega'],
            'cantidadExhibicion' => $request['cantidadExhibicion'],
            'cantidadComprar' => $request['cantidadComprar'],
            'totalProducto' => $request['totalProducto'],
            'FK_UsuarioId' =>  $request['user'] ,
        ]);       
        return redirect('proveedor')->with('success','Producto Creado Correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       /* $id = Producto::
                    select('tbl_producto.id','tbl_producto.name','tbl_producto.precioProducto')
                          ->join('tbl_proveedor','tbl_producto.FK_UsuarioId','=','tbl_proveedor.id')
                          ->where('tbl_proveedor.id','=', $id)
                          ->get();
      return view('sicepla.super-admin.super-admin-producto', [
          'producto'  => $id,
      ]);*/
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
         return view('sicepla.super-admin.super-admin-editarProduc',[
           'id' => $produc,
         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductoUpdateRequest $request, $id)
    {
         $produc = Producto::find($id);
         $produc->fill($request->all());
         $produc->save();
        return redirect('/proveedor')->with('success','Producto Modificada Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producto::destroy($id);
        return redirect('/proveedor')->with('error','Producto Eliminado Correctamente');
    }
    
    public function pedir($id)
    {
        $produc = Producto::find($id);
         return view('sicepla.super-admin.super-admin-solicitarProduc',[
           'id' => $produc,
         ]);
    }
    public function pedirupdate(PedirUpdateRequest $request, $id)
    {
         $produc = Producto::find($id);
         $produc->fill($request->all());
         $produc->save();
        return redirect('/proveedor')->with('success','Producto Solicitado Correctamente');
    }
}
