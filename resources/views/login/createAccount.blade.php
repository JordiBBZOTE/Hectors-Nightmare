@extends('layouts.plantilla')

@section('title', 'Crear Cuenta')
<link rel="stylesheet" href="{{asset('/css/login.css')}}">

@section('content')
<div class="supercontenedor">
    <h1 class="SecretHalloween">Crear cuenta</h1>

    
    <form action="validacion" method="POST">
        @csrf
        <label class="labels" for="username">Usuario</label><br>
        <input class="recuadros" type="text" placeholder="Ingresa tu usuario" name="username" required><br>

        <br><label class="labels" for="email">Email</label><br>
        <input class="recuadros" type="email" placeholder="Ingrese su email" autocomplete="off" name="email"><br>

        <br><label class="labels" for="password">Contraseña</label><br>
        <input class="recuadros" type="password" placeholder="Ingrese su contraseña" required name="password"><br>
        
        <br><label class="labels" for="imguser">Imagen</label><br>
        <input class="recuadros" type="text" placeholder="Ingresa tu(s) imagen(s)" autocomplete="off" name="imguser" required><br>

        <br><input  class="Registrar"  type="submit" value="Crear">
    </form>
</div>

@endsection