@extends('pdf.master')

@section('body')       
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Nombre</th>
                        <th class="text-center">Cant. Comprada</th>
                        <th class="text-center">Precio Proveedor</th>
                        <th class="text-center">Precio Cliente</th>
                </tr>
            </thead>
            <tbody>
            @foreach($reporteUtilidades as $reporteUtilidad)
                        <tr  class="text-center">
                            <td>{{$reporteUtilidad->name}}</td>
                            <td>{{$reporteUtilidad->cantidadComprar}}</td>
                            <td>{{$reporteUtilidad->precioProducto}}</td>
                            <td>{{$reporteUtilidad->precioProductoComprar}}</td>                                                   
                        </tr>
              @endforeach 
                
            </tbody>            
        </table>
@endsection