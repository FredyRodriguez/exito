@component('components.nav-link', [
    'icon' => 'fa fa-object-group',
    'title' => 'Productos',
    'link' => route('compra.index')
])
@endcomponent

@component('components.nav-link', [
    'icon' => 'fa fa-handshake-o',
    'title' => 'Plazos Temporales',
    'link' => route('activtemporal.index')
])
@endcomponent