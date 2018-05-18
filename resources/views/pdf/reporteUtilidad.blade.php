@extends('pdf.master')

@section('body')       
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Nombre</th>
                        <th class="text-center">Cant. Comprada</th>
                        <th class="text-center">Precio Proveedor</th>
                        <th class="text-center">Precio Cliente</th>
                        <th class="text-center">Utilidad</th>
                </tr>
            </thead>
            <tbody>
            @foreach($reporteUtilidades as $reporteUtilidad)
                        <tr  class="text-center">
                            <td>{{$reporteUtilidad->nameProduct}}</td>
                            <td>{{$reporteUtilidad->CantidadComprar}}</td>
                            <td>{{$reporteUtilidad->precioProducto}}</td>
                            <td>{{$reporteUtilidad->precioProductoComprar}}</td> 
                            <td>{{$reporteUtilidad->Utilidad}}</td>                                                  
                        </tr>
              @endforeach 
                
            </tbody>            
        </table>
@endsection