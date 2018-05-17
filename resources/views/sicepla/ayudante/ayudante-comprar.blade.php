@extends('layouts.dash')
@section('content')
<div class="col-md-12">
@include('sicepla.alerts.errors')
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Compra de Productos'])
        <div id="app">
        
        {!!Form::model($producto, ['route' => ['compra.store',$producto], 'method' => 'POST','files' => true, 'enctype'=>'multipart/form-data'])!!}
        <div class="form-group form-md-line-input">
                    {!!Form::hidden('id')!!}{{--Campo Oculto del Id usuario--}}
                </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">
                         {!!Form::label('PRODUCTO')!!}
                        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required','readonly'=>'readonly'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">                                 
                        {!!Form::label('CANTIDAD EN EXHIBICION')!!}                                
                        {!!Form::number('cantidadExhibicion',null,['id' => 'cantidadExhibicion' ,'class'=>'form-control','placeholder'=>'Precio Compra','required','readonly'=>'readonly'])!!}
                    </div>
                </div>
            </div>
            <div class="row">               
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">                                 
                        {!!Form::label('PRECIO DE COMPRA AL CLIENTE')!!}                                
                        {!!Form::number('precioProductoComprar',null,['id' => 'precioProductoComprar' ,'class'=>'form-control','placeholder'=>'Precio Compra al Cliente','required','readonly'=>'readonly'])!!}
                    </div>
                </div>                         
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">                                 
                        {!!Form::label('CANTIDAD A COMPRAR')!!}                                
                        {!!Form::number('cantidadComprar',null,['id' => 'cantidadComprar' ,'class'=>'form-control','placeholder'=>'Cantidad Compra','required'])!!}
                    </div>
                </div></div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">                                 
                        {!!Form::label('PRECIO DE LA COMPRA')!!}                                
                        {!!Form::number('precioComprarCliente',null,['id' => 'precioComprarCliente' ,'class'=>'form-control','placeholder'=>'Precio Compra al Cliente','required','readonly'=>'readonly'])!!}
                    </div>
                </div>
            </div>
                {{--<div class="form-group form-md-line-input">
                    {!!Form::hidden('totalProducto',null,['id'=>'totalProducto',])!!}{{--Campo Oculto del Id usuario
                </div>--}}
                {!! Form::submit('registrar', ['class'=>'btn green-jungle']) !!}
                {{link_to_route('compra.index', $title = 'cancelar', $parameter = [''], $attributes = ['class' => 'btn btn-danger btn-warning'])}}
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
     $('#cantidadComprar').on('keyup', function () {
         var precioP =  document.getElementById("precioProductoComprar").value;         
         console.log("precio " + precioP);  
         cantidadExhibicion = bodegaInput.vale;
         var cant = document.getElementById("cantidadComprar").value;            
         console.log("cantidad bodega " + cant);      
         //var cantidadExhibicion = document.getElementById("cantidadExhibicion").value;
         document.getElementById("precioComprarCliente").value = precioP * cant;
         original = parseInt(original);
         cant = parseInt(cant);  
         if(original > 0){             
            var res =original- cant  
         }
         else{
            var res =cant;
         }
         console.log("total " + res);
         document.getElementById("cantidadExhibicion").value = res; 
         //document.getElementById("cantidadExhibicion").value = res;
         //console.log("resultado " + res);
         //bodegaInput.value = res;
         
        });        
});
</script>
@endpush
