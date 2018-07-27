@extends('material.layouts.dashboard')

{{--
  Dash del usuario, los links cambian segun el rol del usuario
--}}
@php
  $rol = auth()->user()->rol->nombre;
@endphp

@section('links')
  

    @includeWhen($rol == 'Super Administrador', 'idrd.super-admin.super-admin-dash')
    @includeWhen($rol == 'Administrador', 'idrd.admin.administrador-dash')
    @includeWhen($rol == 'Cliente', 'idrd.ayudante.ayudante-dash')
    @includeWhen($rol == 'Proveedor', 'idrd.empleado.empleado-dash')

   

  
@endsection

@push('styles')
    <link rel="stylesheet" href="/assets/global/plugins/bootstrap-toastr/toastr.min.css">
 @endpush

@push('plugins')
    <script src="/assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>
    <script>
        Object.assign(toastr.options, {
            positionClass: "toast-bottom-right"
        })
    </script>
@endpush
