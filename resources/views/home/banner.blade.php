@extends('layouts.plantillalogged')

@section('title', 'Bienvenid@')
<link rel="stylesheet" href="{{asset('/css/styles.css')}}">

@section('content')

<div class="supercontainer">

    <form action="home" method="POST">
        @csrf
        
    </form>

    <video autoplay muted loop>
        <source src="../images/Home.mkv" type="video/mp4" />
    </video>
    

    @if(session('username'))
        <br>{{session('username')}}
    @endif

    <div class="Recuadro"></div>
    <div class="TituloBanner">
        
        <h1>LOGGEADO</h1>
        
    </div>
        <div class="contenedor">
            <div class="contenedorBotones">
                <br><a class="registrarbtn" href="download"><button class="FirstButton" role="button"><span>Descargar!</span></button></a>
                <br><a class="registrarbtn" href="story"><button class="FirstButton" role="button"><span>Historia</span></button></a>
                <br><a class="registrarbtn" href="scores"><button class="FirstButton" role="button"><span>Puntuacion!</span></button></a>
            </div>
        </div>
</div>
</div>
    <footer>
        <p>&copy; 2023 Jorge Márquez, Ivan Caldera & Rita Camacho</p>
        <a class="enlaces" href="/acerca-de">Acerca de  </a>
    </footer>

@endsection