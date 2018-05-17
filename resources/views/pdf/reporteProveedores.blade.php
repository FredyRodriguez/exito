@extends('pdf.master')

@section('body')       
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">Nombre</th>
                        <th class="text-center">Telefono</th>
                        <th class="text-center">Documento</th>
                        <th class="text-center">E-mail</th>
                </tr>
            </thead>
            <tbody>
            @foreach($proveedores as $proveedor)
                        <tr  class="text-center">
                            <td>{{$proveedor->name}}</td>
                            <td>{{$proveedor->telefono}}</td>
                            <td>{{$proveedor->documento}}</td>
                            <td>{{$proveedor->email}}</td>                                                       
                        </tr>
              @endforeach 
                
            </tbody>            
        </table>
@endsection