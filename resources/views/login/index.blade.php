@extends('layouts.plantilla')

@section('title', 'Inicio')
<link rel="stylesheet" href="{{asset('/css/login.css')}}">

@section('content')

<div class="supercontenedor">
    <h1 class="SecretHalloween">Inicio de sesion</h1>

    <form method="POST" action="home">
        @csrf
        <label class="labels" for="email">Usuario</label><br>
        <input name="email" class="recuadros" type="email" placeholder="Ingrese su usuario" autocomplete="off" id="email" required><br>
        <br><label  class="labels" for="#">Contraseña</label><br>
        <input name="password" class="recuadros" type="password" placeholder="Ingrese su contraseña" required><br>
        <br><label><input type="checkbox" name="remember">Recordar sesion</label>
        <br><input class="ingresar" type="submit" value="Ingresar">
        <br><br><a class="registrarbtn" href="login/form">Crear Cuenta</a>
    </form>
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>

@endsection