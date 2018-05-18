@component('components.nav-link', [
    'icon' => 'fa fa-users',
    'title' => 'Proveedores',
    'link' => route('proveedor.index')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-object-group',
    'title' => 'Productos',
    'link' => route('bodega.index')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-book',
    'title' => 'Clientes',
    'link' => route('cliente.index')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-book',
    'title' => 'Utilidad',
    'link' => route('utilidad.index')
])
@endcomponent