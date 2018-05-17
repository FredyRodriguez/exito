@extends('pdf.master')

@section('body')       
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Producto</th>
                        <th class="text-center">Cant. Comprada</th>
                        <th class="text-center">Precio Total</th>
                        <th class="text-center">Fecha Compra</th>
                </tr>
            </thead>
            <tbody>
            @foreach($productoClientes as $productoCliente)
                    <tr  class="text-center">
                        <td>{{$productoCliente->producto->name}}</td>
                            <td>{{$productoCliente->cantidadComprar}}</td>
                            <td>{{$productoCliente->precioComprarCliente}}</td>
                            <td>{{$productoCliente->created_at}}</td>
                    </tr>
              @endforeach 
                
            </tbody>            
        </table>
@endsection