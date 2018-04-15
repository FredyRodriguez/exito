@component('components.nav-link', [
    'icon' => 'fa fa-users',
    'title' => 'Proveedores',
    'link' => route('proveedor.index')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-object-group',
    'title' => 'Productos Bodega',
    'link' => route('departamentos.index')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-book',
    'title' => 'Productos Exhibicion',
    'link' => route('formatos.index')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-area-chart',
    'title' => 'Estadisticas',
    'link' => route('estadistica.index')
])
@endcomponent