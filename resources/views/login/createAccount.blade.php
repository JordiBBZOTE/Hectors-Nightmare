@extends('layouts.plantilla')

@section('title', 'Crear Cuenta')
<link rel="stylesheet" href="{{asset('/css/login.css')}}">

@section('content')

<body class="bodeishon">
    
<div class="supercontenedor">
    <h1 class="SecretHalloween">Crear cuenta</h1>


    
    <form action="validacion" method="POST" id="val">
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

        <script>
            document.getElementById("val").addEventListener("submit", function(event) {
            var radios = document.getElementsByName("imguser");
            var algunoSeleccionado = false;

            for (var i = 0; i < radios.length; i++) {
                if (radios[i].checked) {
                    algunoSeleccionado = true;
                    break;
                }
            }

            if (!algunoSeleccionado) {
                event.preventDefault(); // Previene el envío del formulario
                document.getElementById("error").textContent = "Selecciona al menos una imagen.";
            } else {
                document.getElementById("error").textContent = ""; // Borra el mensaje de error si había uno
            }
        });
        </script>

    </form>
    <div id="error" style="color: red;"></div>
</div>
</body>

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

@endsection