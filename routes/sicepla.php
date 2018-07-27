<?php


Route::prefix('/perfil')->group(function (){
    Route::get('/', 'PerfilController@index')->name('perfil.index');
    Route::post('/', 'PerfilController@update')->name('perfil.update');
    Route::post('password', 'PerfilController@updatePassword')->name('perfil.password');
    Route::post('foto', 'PerfilController@fotoUp')->name('perfil.foto');
});

Route::resource('usuario','UsuarioController');



Route::prefix('reporte')->group(function(){
    Route::post('reporteProveedor','PDFController@reporteProveedor')->name('reporte.reporteProveedor');
    Route::post('reporteProducto','PDFController@reporteProducto')->name('reporte.reporteProducto');
    Route::post('reporteProductoAdmin','PDFController@reporteProductoAdmin')->name('reporte.reporteProductoAdmin');
    Route::post('reporteCliente','PDFController@reporteCliente')->name('reporte.reporteCliente');
    Route::post('reporteProductoCliente','PDFController@reporteProductoCliente')->name('reporte.reporteProductoCliente');
    Route::post('reporteUtilidad','PDFController@reporteUtilidad')->name('reporte.reporteUtilidad');
});

