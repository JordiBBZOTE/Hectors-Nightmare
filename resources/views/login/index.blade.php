@extends('layouts.plantilla')

@section('title', 'Inicio')
<link rel="stylesheet" href="{{asset('/css/login.css')}}">

@section('content')

<div class="supercontenedor">
    <h1 class="SecretHalloween">Inicio de sesion</h1>
    <video autoplay muted loop>
        <source src="./images/Login.mkv" type="video/mp4" />
    </video>
    <form method="POST" action="home">
        @csrf
        <label class="labels" for="email">Email</label><br>
        <input name="email" value="{{old('email')}}" class="recuadros" type="email" placeholder="Ingrese su correo" autocomplete="off" id="email" required autofocus><br>
        <br><label  class="labels" for="#">Contraseña</label><br>
        <input name="password" class="recuadros" type="password" placeholder="Ingrese su contraseña" required><br>
        <br><label class="check"><input type="checkbox" name="remember">Recordar sesion</label>
        <br><input class="ingresar" type="submit" value="Ingresar">
        <br><br><a class="registrarbtn" href="login/form">Crear Cuenta</a>
    </form> <br>
   
    <footer class="foter">
        <p>&copy; 2023 Jorge Márquez, Ivan Caldera & Rita Camacho</p>
        <button id="btn_aboutus_open" onclick="aboutus()" class="aboutus">Conocenos</button>
        <dialog id="modalaboutus">
            
            <button id="btn_aboutus_close" onclick="aboutus()" class="aboutus">Cerrar</button>
        </dialog>
    </footer>
    <script>
        function aboutus() {
           const btn_aboutus_open = document.querySelector("#btn_aboutus_open");
           const btn_aboutus_close = document.querySelector("#btn_aboutus_close");
           const modalaboutus = document.querySelector("#modalaboutus");
    
           btn_aboutus_open.addEventListener("click",()=>{
            modalaboutus.showModal();
           })
           btn_aboutus_close.addEventListener("click",()=>{
            modalaboutus.close();
           })
        }
    </script>

    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>

@endsection