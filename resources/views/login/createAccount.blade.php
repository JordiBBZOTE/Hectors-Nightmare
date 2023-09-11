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
        
        <input type="radio" id="html" name="imguser" value="1">
        <label for="1">1</label><br>
        <input type="radio" id="css" name="imguser" value="2">
        <label for="2">2</label><br>
        <input type="radio" id="javascript" name="imguser" value="3">
        <label for="3">3</label>
        <br>
        <br><input  class="Registrar"  type="submit" value="Crear">
    </form>
</div>

@endsection