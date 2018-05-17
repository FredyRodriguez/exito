@component('components.nav-link', [
    'icon' => 'fa fa-object-group',
    'title' => 'Productos',
    'link' => route('compra.index')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-handshake-o',
    'title' => 'Productos Comprados',
    'link' => route('compra.compras')
])
@endcomponent