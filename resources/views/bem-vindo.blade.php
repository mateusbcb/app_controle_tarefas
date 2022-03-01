<h1>Bem-vindo</h1>


@auth
    <a href="{{ route('tarefas.index') }}">Tarefas</a>

    <h1>Olá, {{ Auth::user()->name }}</h1>
    <p>Seu ID: {{ Auth::user()->id }}</p>
    <p>Seu E-mail: {{ Auth::user()->email }}</p>
    
@endauth

@guest
    <a href="{{ route('login') }}">Entrar</a>
    <a href="{{ route('register') }}">Registrar</a>
    
    <p>Olá vizitante!</p>
@endguest