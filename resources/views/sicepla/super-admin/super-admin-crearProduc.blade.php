@extends('layouts.dash')
@section('content')
<div class="col-md-12">
@include('sicepla.alerts.errors')
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Crear Producto'])
        <div id="app">
        {!! Form::open(['route'=>['producto.store'],'method'=>'POST']) !!}
                <div class="form-group form-md-line-input">
                    {!!Form::hidden('user',$users)!!}{{--Campo Oculto del Id usuario--}}
                </div>             
                <div class="form-group form-md-line-input">
                    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required','maxlength'=>'30'])!!}
                </div>
                <div class="form-group form-md-line-input">                                 
                        {!!Form::number('precioProducto',null,['id' => 'precioProducto','class'=>'form-control','placeholder'=>'Precio Producto','required','maxlength'=>'11'])!!}
                </div>
                <div class="row">
                    <div class="col-xs-3 col-sm-3 col-md-3">                               
                        {!!Form::hidden('cantidadBodega',null,['id'=>'cantidadBodega',])!!}
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">                               
                        {!!Form::hidden('cantidadExhibicion',null,['id'=>'cantidadExhibicion',])!!}
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">                               
                        {!!Form::hidden('cantidadComprar',null,['id'=>'cantidadComprar',])!!}
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3">                               
                        {!!Form::hidden('totalProducto',null,['id'=>'totalProducto',])!!}
                    </div>
                </div>
                </div>
                {!! Form::submit('registrar', ['class'=>'btn green-jungle']) !!}
            {!! Form::close() !!}
            @include('partials.modal-help-crear-actividad')
    @endcomponent
</div>
@endsection

@push('functions')
<script>
jQuery(document).ready(function(){
     $('#precioProducto').on('keyup', function () {
         /*var cantBodega =  document.getElementById("cantidadBodega").value; 
         var cantExhibicion =  document.getElementById("cantidadExhibicion").value;
         var cantComprar =  document.getElementById("cantidadComprar").value;
         cantBodega = parseInt(cantBodega);
         cantExhibicion = parseInt(cantExhibicion);
         cantComprar = parseInt(cantComprar);
         cantBodega = 0;
         cantExhibicion = 0;
         cantComprar = 0;*/
         document.getElementById("cantidadBodega").value = 0;         
         document.getElementById("cantidadExhibicion").value = 0;
         document.getElementById("cantidadComprar").value = 0;        
         document.getElementById("totalProducto").value = 0;
        });       
});
</script>
@endpush

