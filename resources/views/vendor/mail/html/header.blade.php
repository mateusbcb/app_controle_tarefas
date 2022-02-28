<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Controle de tarefas')
<<<<<<< HEAD
<img src="http://localhost:8000/img/logo.png" class="logo" alt="Controle de tarefas">
=======
<img src="{{ asset('img/logo.png') }}" class="logo" alt="Controle de tarefas">
>>>>>>> e20793dc502e16bb4f574ef710e30538363f4c24
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
