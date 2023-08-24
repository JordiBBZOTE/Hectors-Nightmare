@extends('layouts.plantilla')

@section('title', 'Bienvenid@')
<link rel="stylesheet" href="/css/banner.css">

@section('content')
<div class="supercontainer">
    <div class="TituloBanner">
    <h1 class="adrip1">HECTOR TIENE MIEDO</h1>
    </div>
    <div class="contenedor">
        <div class="contenedorBotones">
            <button class="FirstButton" role="link" onclick="window.location.href='login'"><span>Ayudalo!</span></button>
        </div>
    </div>
</div>
    <footer class="footer">
        <p>&copy; 2023 Jorge Márquez, Ivan Caldera & Rita Camacho</p>
          <a class="enlaces" href="/acerca-de">Acerca de |  </a>
          <a class="enlaces" href="/conectar">Historia |   </a>
          <a class="enlaces" href="/rrss">Redes Sociales</a>
        
      </footer>

@endsection