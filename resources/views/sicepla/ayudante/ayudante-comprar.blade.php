@extends('layouts.dash')
@section('content')
<div class="col-md-12">
@include('sicepla.alerts.errors')
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Compra de Productos'])
        <div id="app">
        
        {!!Form::model($id, ['route' => ['compra.store',$id], 'method' => 'POST','files' => true, 'enctype'=>'multipart/form-data'])!!}
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
                <div class="form-group form-md-line-input">
                    {!!Form::hidden('totalProducto',null,['id'=>'totalProducto',])!!}{{--Campo Oculto del Id usuario--}}
                </div>
                {!! Form::submit('registrar', ['class'=>'btn green-jungle']) !!}
                {{link_to_route('bodega.index', $title = 'cancelar', $parameter = [''], $attributes = ['class' => 'btn btn-danger btn-warning'])}}
            {!! Form::close() !!}
            
    @endcomponent
</div>
@endsection

@push('functions')
<script>
jQuery(document).ready(function(){
    let bodegaInput = document.getElementById("cantidadBodega")
    let original = bodegaInput.value
     $('#precioProductoComprar').on('keyup',function(){
            var precioProveedor = document.getElementById("precioProducto").value;
            var precioCliente = document.getElementById("precioProductoComprar").value;
            precioProveedor = parseInt(precioProveedor);
            precioCliente = parseInt(precioCliente);
            rango = precioProveedor - 50 ;
            console.log(precioProveedor);
            if((precioCliente <= precioProveedor)&&(precioCliente >= rango)){
                alert("Precio de venta al cliente es mas bajo precio de compra del proveedor");
            }
     });
     $('#cantidadExhibicion').on('keyup', function () {
             var cantBodega =  bodegaInput.value;
             var cant = document.getElementById("cantidadExhibicion").value;
             original = parseInt(original);
             cant = parseInt(cant);                
             if(cant > original){
                alert("La cantidad a solicitar excede la cantidad en bodega");
             }
             else{                 
                var resultado = original - cant;        
                bodegaInput.value = resultado;               
             }
             var totalProducto = resultado + cant;   
             document.getElementById("totalProducto").value = totalProducto;
     });
     

});
</script>
@endpush
