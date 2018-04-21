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
                    {!!Form::label('NOMBRE PROVEEDOR')!!}                                
                        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required','maxlength'=>'30'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">   
                        {!!Form::label('TELEFONO')!!}                              
                        {!!Form::number('telefono',null,['class'=>'form-control','placeholder'=>'Teléfono','required','maxlength'=>'11'])!!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                     <div class="form-group form-md-line-input">  
                            {!!Form::label('DOCUMENTO ID')!!}                               
                            {!!Form::number('documento',null,['class'=>'form-control','placeholder'=>'Documento ID','required','maxlength'=>'12'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input"> 
                        {!!Form::label('CORREO')!!}                                
                        {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'E-mail','required','maxlength'=>'30'])!!}
                    </div>
                </div>
            </div>            
            {!! Form::submit('Editar', ['class'=>'btn green-jungle']) !!}
            {{link_to_route('proveedor.index', $title = 'cancelar', $parameter = [''], $attributes = ['class' => 'btn btn-danger btn-warning'])}}
            </div>  
            {!! Form::close() !!}
        </div>
        @include('partials.modal-help-edit-depto')
    @endcomponent
</div>
@endsection
