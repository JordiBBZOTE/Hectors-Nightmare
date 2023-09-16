@extends('layouts.plantilla')

@section('title', 'Crear Cuenta')
<link rel="stylesheet" href="{{asset('/css/login.css')}}">

@section('content')

<body class="bodeishon">
    
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
        
        <br><label class="labels" for="imguser">Imagen</label><br><br>
        
        <input type="radio" name="imguser" value="https://hectorsnightmares.000webhostapp.com/images/avatares/Avatar1.png">
        <label for="1"><img class="avatar" src="../images/avatares/Avatar1.png" alt="Avatar1"></label>
        <input type="radio" name="imguser" value="https://hectorsnightmares.000webhostapp.com/images/avatares/Avatar2.png">
        <label for="2"><img class="avatar" src="../images/avatares/Avatar2.png" alt="Avatar2"></label>
        <input type="radio" name="imguser" value="https://hectorsnightmares.000webhostapp.com/images/avatares/Avatar3.png">
        <label for="3"><img class="avatar" src="../images/avatares/Avatar3.png" alt="Avatar3"></label>
        <input type="radio" name="imguser" value="https://hectorsnightmares.000webhostapp.com/images/avatares/Avatar4.png">
        <label for="3"><img class="avatar" src="../images/avatares/Avatar4.png" alt="Avatar4"></label>
        <br>
        <br><input  class="Registrar"  type="submit" value="Crear">
    </form>
</div>
</body>

@endsection