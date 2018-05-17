@extends('pdf.master')

@section('body')       
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Cant. Bodega</th>
                    <th class="text-center">Cant. Exhibicion</th>
                    <th class="text-center">Total Producto</th>
                    <th class="text-center">Precio Cliente</th>
                </tr>
            </thead>
            <tbody>
            @foreach($productos as $producto)
                    <tr  class="text-center">
                        <td>{{$producto->name}}</td>
                        <td>{{$producto->cantidadBodega}}</td>
                        <td>{{$producto->cantidadExhibicion}}</td>
                        <td>{{$producto->totalProducto}}</td>
                        <td>{{$producto->precioProductoComprar}}</td>
                    </tr>
              @endforeach 
                
            </tbody>            
        </table>
@endsection