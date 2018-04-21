@extends('layouts.dash')
@section('content')
<div class="col-md-12">
@include('sicepla.alerts.errors')
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Crear Cliente'])
        <div id="app">
        {!! Form::open(['route'=>'cliente.store','method'=>'POST']) !!}                        
           <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">                                 
                        {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre','required','maxlength'=>'30'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group form-md-line-input">                                 
                        {!!Form::number('telefono',null,['class'=>'form-control','placeholder'=>'Teléfono','required','maxlength'=>'11'])!!}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                     <div class="form-group form-md-line-input">                                 
                            {!!Form::number('documento',null,['class'=>'form-control','placeholder'=>'Documento ID','required','maxlength'=>'12'])!!}
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">                                
                    <div class="form-group form-md-line-input">                                 
                            {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'E-mail','required','maxlength'=>'60'])!!}
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">
                     <div class="form-group form-md-line-input">                                 
                        {!!Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña','required'])!!}
                    </div> 
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                   <div class="form-group form-md-line-input">                                 
                        {!!Form::password('password_confirmation',['class'=>'form-control','placeholder'=>'Confirmar Contraseña'])!!}
                    </div>  
                </div>
            </div>
            <div class="row">                
                <div class="col-xs-6 col-sm-6 col-md-6">
                   <div class="form-group form-md-line-input">
                        <label>Usuario</label>
                            <select class="form-control" name="FK_RolesId" id="" required=""> 
                                    <option value="3">Cliente</option>                             
                            </select>                
                    </div>
                </div>
            </div>
            {!! Form::submit('registrar', ['class'=>'btn green-jungle']) !!}
            </div>                        
            {!! Form::close() !!}
        </div>       
        @include('partials.modal-help-crear-usuario') 
    @endcomponent
</div>
@endsection