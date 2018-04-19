<?php
//Rutas Super Administrador

Route::resource('usuarios','UserController');
Route::resource('departamentos', 'DepartamentoController');

Route::prefix('/perfil')->group(function (){
    Route::get('/', 'PerfilController@index')->name('perfil.index');
    Route::post('/', 'PerfilController@update')->name('perfil.update');
    Route::post('password', 'PerfilController@updatePassword')->name('perfil.password');
    Route::post('foto', 'PerfilController@fotoUp')->name('perfil.foto');
});

/*Route::prefix('departamentos/{departamento}')->group(function () {
    Route::get('actividad','ActividadController@index')->name('actividad.index');
    Route::get('actividades','ActividadController@show')->name('actividad.show');
    Route::any('actividad/create','ActividadController@create')->name('actividad.create');
    Route::any('activida','ActividadController@store')->name('actividad.store');
    Route::delete('actividades','ActividadController@destroy')->name('actividad.destroy'); 
});*/

Route::resource('formatos','FormatoController');

//Rutas administrador

Route::resource('admindepto', 'AdmindeptoController');
Route::resource('admintempo', 'AdminActivTempoController');

Route::prefix('admindepto/{departamento}')->group(function () {
    Route::get('admin_actividad','AdminActividadController@index')->name('admin_actividad.index');
    
    Route::get('admin_actividad','AdminActividadController@show')->name('admin_actividad.show');
});


//Rutas Ayudante

Route::resource('activtemporal', 'AyudActiTempoController');

//Rutas Jefe Dependencia
Route::resource('jefedepto', 'JefedeptoController');

Route::resource('jefeacttemp', 'JefeActTempController');

//Rutas Estadisticas
Route::resource('estadistica', 'EstadisticasController');

//===========================================================

Route::resource('proveedor','ProveedorController');

Route::prefix('producto')->group(function () {   
    Route::get('create/{proveedor}','ProductoController@create')->name('producto.create');
    Route::post('store','ProductoController@store')->name('producto.store');
    Route::get('index/{proveedor}','ProductoController@index')->name('producto.index');
    Route::get('editar/{producto}','ProductoController@edit')->name('producto.editar');
    Route::put('update/{producto}','ProductoController@update')->name('producto.update');
    Route::delete('destroy{producto}','ProductoController@destroy')->name('producto.destroy');
    Route::get('pedir/{producto}','ProductoController@pedir')->name('producto.pedir');
    Route::put('pedirupdate/{producto}','ProductoController@pedirupdate')->name('producto.pedirupdate');
});

Route::prefix('bodega')->group(function () {   
    //Route::get('create/{proveedor}','ProductoController@create')->name('producto.create');
    //Route::post('store','ProductoController@store')->name('producto.store');
    Route::get('index','BodegaController@index')->name('bodega.index');
    Route::get('editar/{producto}','BodegaController@edit')->name('bodega.editar');  
    Route::put('update/{producto}','BodegaController@update')->name('bodega.update');
    //Route::get('editar/{producto}','ProductoController@edit')->name('producto.editar');
    //Route::put('update/{producto}','ProductoController@update')->name('producto.update');
    //Route::delete('destroy{producto}','ProductoController@destroy')->name('producto.destroy');
    //Route::get('pedir/{producto}','ProductoController@pedir')->name('producto.pedir');
    //Route::put('pedirupdate/{producto}','ProductoController@pedirupdate')->name('producto.pedirupdate');
});