.<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('/css/scores.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('/css/script.js')}}"></script>
 
    <title>@yield('title')</title>
</head>

<div class="menu-container">
    <button class="menu-button">Menú de opciones</button>
    <div class="menu-dropdown">
        <br><a href="main"><button class="botonlogged" role="button"><span>Home!</span></button></a>
        <br><a href="https://drive.google.com/u/0/uc?id=15Mr_Y6aln1_9nYOwnlr4cRXWyE7GIEyU&export=download"><button class="botonlogged" role="button" download="Hectors_Nightmare.pdf"><span>Descargar!</span></button></a>
        <br><a href="scores"><button class="botonlogged" role="button"><span>Puntuacion!</span></button></a>
        	
        <form action="logout" method="POST" style="display: inline">
            @csrf
            <a class="CerrarSession" href="#" onclick="this.closest('form').submit()">Cerrar Sesion</a>
        </form>
    </div>
</div>




<body>

    
    @yield('content')
    
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
</html>