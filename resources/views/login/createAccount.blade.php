@extends('layouts.plantilla')

@section('title', 'Crear Cuenta')
<link rel="stylesheet" href="{{asset('/css/login.css')}}">

@section('content')
<div class="supercontenedor">
    <h1 class="SecretHalloween">Crear cuenta</h1>

    <form action="validate.php">
        <label class="labels" for="name">Nombre</label><br>
        <input class="recuadros" type="text" placeholder="Ingresa tu nombre" id="name" required><br>

        <br><label class="labels" for="lastname">Apellido</label><br>
        <input class="recuadros" type="password" placeholder="Ingresa tu(s) apellido(s)" autocomplete="off" id="lastname" required><br>

        <br><label class="labels" for="email">Email</label><br>
        <input class="recuadros" type="email" placeholder="Ingrese su email" autocomplete="off" id="email"><br>

        <br><label class="labels" for="password">Contraseña</label><br>
        <input class="recuadros" type="password" placeholder="Ingrese su contraseña" required id="password"><br>
        
        <br><input  class="Registrar"  type="submit" value="Crear">
    </form>
</div>

@endsection