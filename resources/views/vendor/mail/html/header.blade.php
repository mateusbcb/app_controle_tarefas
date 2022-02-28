<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Controle de tarefas')

<img src="http://localhost:8000/img/logo.png" class="logo" alt="Controle de tarefas">

<img src="{{ asset('img/logo.png') }}" class="logo" alt="Controle de tarefas">

@else
{{ $slot }}
@endif
</a>
</td>
</tr>
