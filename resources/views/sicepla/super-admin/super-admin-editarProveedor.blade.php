@extends('layouts.dash')
@section('content')
<div class="col-md-12">
@include('sicepla.alerts.errors')
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Editar Proveedor'])
        <div id="app">
        {!!Form::model($users, ['route' => ['proveedor.update',$users], 'method' => 'PUT','files' => true, 'enctype'=>'multipart/form-data'])!!}
           <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">                                 
                        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">                                 
                        {!!Form::number('telefono',null,['class'=>'form-control','placeholder'=>'Teléfono','required'])!!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                     <div class="form-group form-md-line-input">                                 
                            {!!Form::number('documento',null,['class'=>'form-control','placeholder'=>'Documento ID','required'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">                                 
                        {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'E-mail','required'])!!}
                    </div>
                </div>
            </div>            
            {!! Form::submit('Editar', ['class'=>'btn green-jungle']) !!}
            {{link_to_route('departamentos.index', $title = 'cancelar', $parameter = [''], $attributes = ['class' => 'btn btn-danger btn-warning'])}}
            </div>  
            {!! Form::close() !!}
        </div>
        @include('partials.modal-help-edit-depto')
    @endcomponent
</div>
@endsection
