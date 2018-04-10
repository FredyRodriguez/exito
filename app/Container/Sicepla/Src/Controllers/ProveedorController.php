<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use App\Container\Sicepla\Src\Requests\ProveedorStoreRequest;
use App\Container\Sicepla\Src\User;
use App\Http\Controllers\Controller;
//use App\Container\Sicepla\Src\Departamento;
use App\Container\Sicepla\Src\Roles;
use App\Container\Sicepla\Src\Notifications\UsuarioCreado;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->where('FK_RolesId',"=","4");
        return view('sicepla.super-admin.super-admin-proveedor',compact('users','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Roles::all();
        return view('sicepla.super-admin.super-admin-crearProveedor',compact('users','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProveedorStoreRequest $request)
    {
        $atributos = $request->only(
            'name',
            'telefono',
            'documento',
            'email',
            'FK_RolesId'
        );
        
        $user = new User($atributos);
       // $user->password = bcrypt($user->password);
        
        $user->save();
        //$user->notify(new UsuarioCreado($request->password));
        return redirect()->route('proveedor.index')->with('success','Usuario Creado Correctamente');
        return $user;
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
        //
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
        //
    }
}
