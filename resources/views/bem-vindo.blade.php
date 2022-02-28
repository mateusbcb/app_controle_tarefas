<h1>Bem-vindo</h1>

@auth

    <h1>Olá, {{ Auth::user()->name }}</h1>
    <p>Seu ID: {{ Auth::user()->id }}</p>
    <p>Seu E-mail: {{ Auth::user()->email }}</p>
    
@endauth

@guest
    <p>Olá vizitante!</p>
@endguest