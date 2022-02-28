@component('mail::message')
# {{ $tarefa }}

Data limite da conclusão: {{ $data_limite_conclusao }}

@component('mail::button', ['url' => $url])
Clique aqui para ver a tarefa
@endcomponent

Atts,<br>
{{ config('app.name') }}
@endcomponent
