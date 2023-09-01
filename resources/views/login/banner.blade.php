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
    
    <footer class="footer">
        <p>&copy; 2023 Jorge Márquez, Ivan Caldera & Rita Camacho</p>
          <a class="enlaces" href="/acerca-de">Acerca de |  </a>
          <a class="enlaces" href="/conectar">Historia |   </a>
      </footer>

@endsection