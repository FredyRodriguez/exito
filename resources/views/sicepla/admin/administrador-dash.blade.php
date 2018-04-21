@component('components.nav-link', [
    'icon' => 'fa fa-object-group',
    'title' => 'Proveedores',
    'link' => route('proveedor.index')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-handshake-o',
    'title' => 'Productos',
    'link' => route('bodega.producto')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-book',
    'title' => 'Clientes',
    'link' => route('cliente.index')
])
@endcomponent