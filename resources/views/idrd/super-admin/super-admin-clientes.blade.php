@extends('layouts.dash')

@push('styles')
<!-- Datatables Styles -->
<link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endpush
      
@section('content')
<div class="col-md-12">
{{--Inicio Mensaje Confirmar--}}
@include('idrd.alerts.success')
@include('idrd.alerts.error')
@include('idrd.alerts.errors')
{{--Fin Mensaje Confirmar--}}
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Usuarios','pdf'=> route('reporte.reporteCliente')])
        <div id="app">
        {{--boton crear departamento--}}
            <div>
                <a href="{{route('usuario.create')}}" class="btn green-jungle">
                    <i class="fa fa-plus"></i>
                       Crear Usuarios
                </a>
             </div>   <br>
             {{--fin boton crear departamento--}}
            {{--inicio tabla--}}
            <div class="table-responsive">
                <table id="data" class="table table-hover table-bordered table-condensed">
                    <thead>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Documento</th>
                        <th class="text-center">Telefono</th>
                        <th class="text-center">Dirección</th>
                        <th class="text-center">Pais</th>
                        <th class="text-center">Ciudad</th>
                        <th class="text-center">Codigo Postal</th>
                        <th class="text-center">Fecha Nacimiento</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Editar</th>
                        <th class="text-center">Eliminar</th>
                        
                    </thead>

                    <tbody>
                      @foreach($users as $user)
                        <tr  class="text-center">
                            <td>{{$user->name}}</td>
                            <td>{{$user->documento}}</td>
                            <td>{{$user->telefono}}</td>
                            <td>{{$user->direccion}}</td>
                            <td>{{$user->pais}}</td>
                            <td>{{$user->ciudad}}</td>
                            <td>{{$user->codigo}}</td>
                            <td>{{$user->fecha}}</td>                            
                            <td>{{$user->email}}</td>
                            <td>{{$user->foto}}</td>
                            <td>{{link_to_route('usuario.edit', $title = '', $parameter = $user->PK_id, $attributes = ['class' => 'btn btn-simple btn-warning btn-icon edit icon-pencil'])}}
                            </td>
                            <td>{!!Form::open(['method' => 'DELETE', 'route' => ['usuario.destroy',$user->PK_id]])!!}
                                    {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  }}
                                {!!Form::close()!!}
                            </td>
                        @endforeach
                    </tbody> 
                </table>
            </div>
        </div>
    @endcomponent
</div>
@endsection

@push('styles')
  <link rel="stylesheet" href="/assets/global/plugins/bootstrap-select/css/bootstrap-select.min.css">
@endpush
@push('functions')
  <!-- Datatables Scripts -->
  <script src="{{ asset('assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/pages/scripts/table-datatable.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/global/plugins/jquery-validation/js/localization/messages_es.js') }}" type="text/javascript"></script>

  <script src="{{ asset('assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}" type="text/javascript"></script>

  <script src="/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
  <script src="/assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>

  <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
          <script src="/js/DataTable.js" type="text/javascript">
          </script>
@endpush
