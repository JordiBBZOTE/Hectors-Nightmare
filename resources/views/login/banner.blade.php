@extends('layouts.plantilla')

@section('title', 'Bienvenid@')
<link rel="stylesheet" href="/css/banner.css">

@section('content')

<div class="supercontainer">

    <div class="TituloBanner">
        <h1 class="adrip1">HECTOR'S NIGHTMARE</h1>
    </div>

    <div class="contenedor">
        <div class="contenedorBotones">
            <button class="FirstButton" role="link" onclick="window.location.href='login'"><span>Ayudalo!</span></button>
        </div>
    </div>

</div>
    
    <video autoplay muted loop>
        <source src="./images/Login.mkv" type="video/mp4" />
    </video>
    
    
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