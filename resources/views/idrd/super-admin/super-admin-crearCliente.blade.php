@extends('layouts.dash')
@section('content')
<div class="col-md-12">
@include('idrd.alerts.errors')
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Crear Usuarios'])
        <div id="app">
        {!! Form::open(['route'=>'usuario.store','method'=>'POST','file'=> true]) !!}                        
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
                        {!!Form::text('direccion',null,['class'=>'form-control','placeholder'=>'Dirección','required','maxlength'=>'30'])!!}
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
            <div class="form-group form-md-line-input">
                        <label>Usuario</label>
                            <select name="FK_RolesId" id="FK_RolesId">
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->nombre}}</option>
                                 @endforeach
                        </select>              
                    </div>
            {!! Form::submit('registrar', ['class'=>'btn green-jungle']) !!}
            </div>                        
            {!! Form::close() !!}
        </div>       
    @endcomponent
</div>
@endsection