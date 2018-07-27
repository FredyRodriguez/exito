@extends('layouts.dash')

@section('content')

@section('content')
    <div class="col-md-12">
        {{-- BEGIN HTML SAMPLE --}}
        @component('components.portlet', ['icon' => 'icon-layers', 'title' => 'MODELO SCM PARA LA EMPRESA EXITO '])

            @component('components.panel', ['icon' => 'icon-layers', 'title' => 'Nosotros','contenido'=>'Somos una compañía multilatina, líder del mercado al detal en Suramérica. Presentes en Colombia con el Grupo Éxito; en Brasil con el Grupo Pão de Açúcar; en Uruguay con los Grupos Disco y Devoto y en Argentina con Libertad.','class'=>'panel-success'])
            @endcomponent

            @component('components.panel', ['icon' => 'icon-layers', 'title' => 'Misión','contenido'=>'Es la satisfacción de las necesidades, gustos y preferencias de los clientes, mediante experiencias de compra memorables y garantía de excelencia en servicio, selección de productos, calidad y precio, todo ello en ambientes modernos y con propuestas de valor diferenciadas por formato comercial.','class'=>'panel-info'])
            @endcomponent

             @component('components.panel', ['icon' => 'icon-layers', 'title' => 'Visión','contenido'=>'La visión del grupo éxito es para el año 2015 cautivar por encima de la competencia, la lealtad de los consumidores colombianos, la preferencia de losproveedores y el orgullo de los empleados y accionistas". Consolidarse como unaempresa internacional con participación de las marcas comerciales propias.','class'=>'panel-warning'])
             @endcomponent

        @endcomponent

        {{-- END HTML SAMPLE --}}
    </div>
@endsection
  

@endsection
