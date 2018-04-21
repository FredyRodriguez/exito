@extends('layouts.dash')
@section('content')
<div class="col-md-12">
@include('sicepla.alerts.errors')
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Solicitar Producto'])
        <div id="app">
        
        {!!Form::model($id, ['route' => ['producto.pedirupdate',$id], 'method' => 'PUT','files' => true, 'enctype'=>'multipart/form-data'])!!}
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">
                         {!!Form::label('PRODUCTO')!!}
                        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required','readonly'=>'readonly'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">                                 
                        {!!Form::label('PRECIO VENTA')!!}
                        {!!Form::number('precioProducto',null,['id' => 'precioProducto' ,'class'=>'form-control','placeholder'=>'Precio Producto','required','readonly'=>'readonly'])!!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input"> 
                        {!!Form::label('CANTIDAD DE COMPRA')!!}                                
                        {!!Form::number('cantidadBodega',null,['id' => 'cantidadBodega' ,'class'=>'form-control','placeholder'=>'Cantidad Producto','required'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">                                 
                        {!!Form::label('PRECIO DE COMPRA AL PROVEEDOR')!!}                                
                        {!!Form::number('compraProveedor',null,['id' => 'compraProveedor' ,'class'=>'form-control','placeholder'=>'Precio Compra','required','readonly'=>'readonly'])!!}
                    </div>
                </div>
            </div>
            <div class="row">            
                <div class="form-group form-md-line-input">
                    {!!Form::hidden('cantidadExhibicion',null,['id'=>'cantidadExhibicion',])!!}{{--Campo Oculto del Id usuario--}}
                </div>
                <div class="form-group form-md-line-input">
                    {!!Form::hidden('totalProducto',null,['id'=>'totalProducto',])!!}{{--Campo Oculto del Id usuario--}}
                </div>
            </div>
                {!! Form::submit('registrar', ['class'=>'btn green-jungle']) !!}
                {{link_to_route('proveedor.index', $title = 'cancelar', $parameter = [''], $attributes = ['class' => 'btn btn-danger btn-warning'])}}
            {!! Form::close() !!}
            
    @endcomponent
</div>
@endsection

@push('functions')
<script>
jQuery(document).ready(function(){
    let bodegaInput = document.getElementById("cantidadExhibicion")
    let original = bodegaInput.value
    console.log("exhibicion " + original);
     $('#cantidadBodega').on('keyup', function () {
         var precioP =  document.getElementById("precioProducto").value;         
         console.log("precio " + precioP);  
         cantidadExhibicion = bodegaInput.vale;
         var cant = document.getElementById("cantidadBodega").value;            
         console.log("cantidad bodega " + cant);      
         //var cantidadExhibicion = document.getElementById("cantidadExhibicion").value;
         document.getElementById("compraProveedor").value = precioP * cant;
         original = parseInt(original);
         cant = parseInt(cant);  
         if(original > 0){             
            var res =cant + original
         }
         else{
            var res =cant;
         }
         console.log("total " + res);
         document.getElementById("totalProducto").value = res; 
         //document.getElementById("cantidadExhibicion").value = res;
         //console.log("resultado " + res);
         //bodegaInput.value = res;
         
        });
       
           
         
});
</script>
@endpush
