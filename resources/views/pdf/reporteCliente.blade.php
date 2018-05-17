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
            @foreach($clientes as $cliente)
                        <tr  class="text-center">
                            <td>{{$cliente->name}}</td>
                            <td>{{$cliente->telefono}}</td>
                            <td>{{$cliente->documento}}</td>
                            <td>{{$cliente->email}}</td>                                                       
                        </tr>
              @endforeach 
                
            </tbody>            
        </table>
@endsection