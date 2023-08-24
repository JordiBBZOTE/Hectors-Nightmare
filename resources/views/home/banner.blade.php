@extends('layouts.plantillalogged')

@section('title', 'Bienvenid@')
<link rel="stylesheet" href="{{asset('/css/styles.css')}}">

@section('content')
<div class="supercontainer">

    <form action="home" method="POST">
        @csrf
        <a class="enlaces" href="#" onclick="this.closest('form').submit()">Cerrar Sesion</a>
    </form>

<script>
    function ejecutar(){
        exec('C:\Users\MARQUEZJIMENEZJORGE\Documents\rufus\rufus-4.2p.exe');
    }
</script>

    <div class="TituloBanner">
    <h1>LOGGEADO</h1>
    </div>
    <div class="contenedor">
        <div class="contenedorBotones">
            <button class="FirstButton" role="button" onclick="ejecutar()"><span>Descargar!</span></button>
            <button class="FirstButton" role="link"><span>Historia!</span></button>
            <button class="FirstButton" role="link"><span>Puntuacion!</span></button>
        </div>
    </div>
</div>
    <footer class="footer">
        <p>&copy; 2023 Jorge Márquez, Ivan Caldera & Rita Camacho</p>
          <a class="enlaces" href="/acerca-de">Acerca de  </a>
        
      </footer>

@endsection