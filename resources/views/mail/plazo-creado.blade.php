@component('mail::message')
#Hola {{ $user->name }}

Se le ha asignado un nuevo plazo llamado **{{$plazo->nombre}}**, su forma de entrega sera:<br>
Dia del Mes: **{{$plazo->num_dia}}**.<br>
Fecha: **{{$plazo->fechaD}}**.<br>
Tipo de Dia: **{{$plazo->tipoDia}}**.<br>
Hora: **{{$plazo->horaD}}**.

Para poder ser cumplido.

Gracias,<br>
{{ config('app.name') }}
@endcomponent












