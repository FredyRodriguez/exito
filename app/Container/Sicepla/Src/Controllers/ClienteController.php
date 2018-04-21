<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use App\Container\Sicepla\Src\User;
use App\Http\Controllers\Controller;
use App\Container\Sicepla\Src\Roles;
use App\Container\Sicepla\Src\Requests\UserStoreRequest;


class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all()->where('FK_RolesId',"=","3");
        return view('sicepla.super-admin.super-admin-clientes',compact('users','roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Roles::all();
        return view('sicepla.super-admin.super-admin-crearCliente',compact('users','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        $atributos = $request->only(
            'name',
            'telefono',
            'documento',
            'email',
            'password',
            'FK_RolesId'
        );        
        $user = new User($atributos);
        $user->password = bcrypt($user->password);        
        $user->save();        
        return redirect()->route('cliente.index')->with('success','Cliente Creado Correctamente');
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
    public function edit($users)
    {
        $provee = User::find($users);
         return view('sicepla.super-admin.super-admin-editarCliente',[
           'users' => $provee,
         ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $users)
    {
        $provee = User::find($users);
      $provee->fill($request->all());
      $provee->save();
      return redirect('/cliente')->with('success','Cliente Modificado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($users)
    {
        User::destroy($users);
        return redirect('/cliente')->with('error','Cliente Eliminado Correctamente');
    }
}
