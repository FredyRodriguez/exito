<?php

namespace App\Container\Sicepla\Src\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Container\Sicepla\Src\User;
use App\Http\Controllers\Controller;
use App\Container\Sicepla\Src\Roles;
use App\Container\Sicepla\Src\Requests\UserStoreRequest;
use App\Container\Sicepla\Src\Requests\UsuarioUpdateRequest;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $users = User::all()->where('FK_RolesId',"=","3");
        $users = User::all();
        return view('idrd.super-admin.super-admin-clientes',compact('users'));
    }

    public function create()
    {
        //$roles = Roles::all();
        $roles = Roles::all();
        return view('idrd.super-admin.super-admin-crearCliente',compact('users','roles'));
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
            'documento',
            'telefono',
            'direccion', 
            'pais',
            'ciudad',
            'codigo',
            'fecha',
            'email',
            'password',
            'FK_RolesId'
        );        
        $user = new User($atributos);
        $user->password = bcrypt($user->password); 
        
        if($request->file('foto')){
            $path = Storage::disk('public')->put('image', $request->file('foto'));
            $user->fill('');
            
        }
        
        $user->save();        
        return redirect()->route('usuario.index')->with('success','Usuario Creado Correctamente');
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
         return view('idrd.super-admin.super-admin-editarCliente',[
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
    public function update(UsuarioUpdateRequest $request, $users)
    {
        $provee = User::find($users);
      $provee->fill($request->all());
      $provee->save();
      return redirect('/usuario')->with('success','Usuario Modificado Correctamente');
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
        return redirect('/usuario')->with('error','Usuario Eliminado Correctamente');
    }
}
