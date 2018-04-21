@extends('layouts.dash')
@section('content')
<div class="col-md-12">
@include('sicepla.alerts.errors')
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Editar Producto'])
        <div id="app">
        
        {!!Form::model($id, ['route' => ['producto.update',$id], 'method' => 'PUT','files' => true, 'enctype'=>'multipart/form-data'])!!}
                          
                <div class="form-group form-md-line-input">
                    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required','maxlength'=>'30'])!!}
                </div>
                <div class="form-group form-md-line-input">                                 
                        {!!Form::number('precioProducto',null,['class'=>'form-control','placeholder'=>'Precio Producto','required','maxlength'=>'15'])!!}
                    </div>
                {!! Form::submit('registrar', ['class'=>'btn green-jungle']) !!}
                {{link_to_route('proveedor.index', $title = 'cancelar', $parameter = [''], $attributes = ['class' => 'btn btn-danger btn-warning'])}}
            {!! Form::close() !!}
            @include('partials.modal-help-crear-actividad')
    @endcomponent
</div>
@endsection

