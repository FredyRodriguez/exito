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
                    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required'])!!}
                </div>
                <div class="form-group form-md-line-input">                                 
                        {!!Form::number('precioProducto',null,['class'=>'form-control','placeholder'=>'Precio Producto','required'])!!}
                    </div>
                {!! Form::submit('registrar', ['class'=>'btn green-jungle']) !!}
            {!! Form::close() !!}
            @include('partials.modal-help-crear-actividad')
    @endcomponent
</div>
@endsection

