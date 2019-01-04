<!-- app/views/login.blade.php -->

<!doctype html>
<html>
<head>
    <title>Login</title>
</head>
<body>

{{ Form::open(array('url' => '/')) }}
<h1>Login</h1>

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('matricula') }}
    {{ $errors->first('senha') }}
</p>

<p>
    {{ Form::label('matricula', 'Matricula') }}
    {{ Form::text('matricula', '', array('placeholder' => 'Exemplo: 123')) }}
</p>

<p>
    {{ Form::label('senha', 'Senha') }}
    {{ Form::password('senha') }}
</p>

<p>{{ Form::submit('Login') }}</p>
{{ Form::close() }}


{{--
@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif
--}}

<div class="content">
    <a href="{{ route('admin-inicio') }}">Entrar</a>
</div>
