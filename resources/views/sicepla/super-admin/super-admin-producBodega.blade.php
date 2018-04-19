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
@include('sicepla.alerts.success')
@include('sicepla.alerts.error')
@include('sicepla.alerts.errors')
{{--Fin Mensaje Confirmar--}}
    @component('components.portlet', ['icon' => 'fa fa-users', 'title' => 'Productos en Bodega'])
        <div id="app">
        {{--boton crear departamento--}}
            <div>
                <a href="{{route('proveedor.create')}}" class="btn green-jungle">
                    <i class="fa fa-plus"></i>
                       Crear Proveedores
                </a>
             </div>   <br>
             {{--fin boton crear departamento--}}
            {{--inicio tabla--}}
            <div class="table-responsive">
                <table id="data" class="table table-hover table-bordered table-condensed">
                    <thead>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Cant. Bodega</th>
                        <th class="text-center">Cant. Exhibicion</th>
                        <th class="text-center">Total Producto</th>
                        <th class="text-center">Precio Cliente</th>
                        <th class="text-center">Editar</th>
                        <th class="text-center">Soli. Exhibicion</th>
                        
                    </thead>
                    <tbody>
                      @foreach($productos as $producto)
                        <tr  class="text-center">
                            <td>{{$producto->name}}</td>
                            <td>{{$producto->cantidadBodega}}</td>
                            <td>{{$producto->cantidadExhibicion}}</td>
                            <td>{{$producto->totalProducto}}</td>
                            <td>{{$producto->precioProductoComprar}}</td>
                            <td>{{link_to_route('producto.pedir', $title = '', $parameter = $producto->id, $attributes = ['class' => 'btn btn-simple btn-warning btn-icon edit icon-pencil'])}}</td>
                            <td>{{link_to_route('bodega.editar', $title = '', $parameter = $producto->id, $attributes = ['class' => 'btn btn-simple btn-primary glyphicon glyphicon-ok'])}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                     
                </table>
            </div>
        </div>
        @include('partials.modal-help-usuario')
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
