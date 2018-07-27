@extends('layouts.dash')
@section('content')
<div class="col-md-12">
@include('idrd.alerts.errors')
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Editar Cliente'])
        <div id="app">
        {!!Form::model($users, ['route' => ['usuario.update',$users], 'method' => 'PUT','files' => true, 'enctype'=>'multipart/form-data'])!!}
           <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">                                 
                        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required','maxlength'=>'30'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">                                 
                        {!!Form::number('documento',null,['class'=>'form-control','placeholder'=>'Documento ID','required','maxlength'=>'11'])!!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                     <div class="form-group form-md-line-input">                                 
                            {!!Form::number('telefono',null,['class'=>'form-control','placeholder'=>'Telefono','required','maxlength'=>'12'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">                                
                    <div class="form-group form-md-line-input">                                 
                        {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Nombre','required','maxlength'=>'30'])!!}
                    </div>
                </div>
            </div> 
             <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                     <div class="form-group form-md-line-input">                                 
                            {!!Form::text('pais',null,['class'=>'form-control','placeholder'=>'Pais','required','maxlength'=>'12'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">                                
                    <div class="form-group form-md-line-input">                                 
                            {!!Form::text('ciudad',null,['class'=>'form-control','placeholder'=>'Ciudad','required','maxlength'=>'60'])!!}
                    </div>
                </div>
            </div> 
            
	 <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                     <div class="form-group form-md-line-input">                                 
                            {!!Form::number('codigo',null,['class'=>'form-control','placeholder'=>'Codigo Postal','required','maxlength'=>'12'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">                                
                    <div class="form-group form-md-line-input">                                 
                            {!!Form::date('fecha',null,['class'=>'form-control','placeholder'=>'Fecha de Nacimiento','required','maxlength'=>'60'])!!}
                    </div>
                </div>
            </div> 
             <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                     <div class="form-group form-md-line-input">                                 
                            {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'E-Mail','required','maxlength'=>'20'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">                                
                    <div class="form-group form-md-line-input">                                 
                            {!!Form::file('foto',null,['class'=>'form-control','placeholder'=>'Foto','required','maxlength'=>'60'])!!}
                    </div>
                </div>
            </div>        
            {!! Form::submit('Editar', ['class'=>'btn green-jungle']) !!}
            {{link_to_route('usuario.index', $title = 'cancelar', $parameter = [''], $attributes = ['class' => 'btn btn-danger btn-warning'])}}
            </div>  
            {!! Form::close() !!}
        </div>
    @endcomponent
</div>
@endsection
