.<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('/css/modalstyles.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('/css/script.js')}}"></script>
 
    <title>@yield('title')</title>
</head>

<div class="menu-container">
    <button class="menu-button">Menú de opciones</button>
    <div class="menu-dropdown">
        <br><a class="botonlogged" href="main"><button role="button"><span>Home!</span></button></a>
        <br><a class="botonlogged" href="download"><button role="button"><span>Descargar!</span></button></a>
        <br><a class="botonlogged" href="scores"><button role="button"><span>Puntuacion!</span></button></a>
        
        <form action="logout" method="POST" style="display: inline">
            @csrf
            <a class="CerrarSession" href="#" onclick="this.closest('form').submit()">Cerrar Sesion</a>
        </form>
    </div>
</div>


<footer>
    <p>&copy; 2023 Jorge Márquez, Ivan Caldera & Rita Camacho</p>
    <a class="enlaces" href="/acerca-de">Acerca de  </a>
</footer>

<body>

    
    @yield('content')
    
</body>
</html>