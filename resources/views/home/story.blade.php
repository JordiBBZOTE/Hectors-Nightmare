@extends('layouts.plantillalogged')

@section('title', 'Story')
<link rel="stylesheet" href="{{asset('/css/styles.css')}}">

@section('content')
<div class="supercontainer">

    <form action="home" method="POST">
        @csrf
        <a class="enlaces" href="#" onclick="this.closest('form').submit()"><button role="button"><span>Cerrar sesion</span></button></a>
        <a href="javascript: history.go(-1)"><button role="button"><span>Volver</span></button></a>
    </form>

    @if(session('username'))
    <br>
    {{session('username')}}
    @endif

    <div class="TituloBanner">

        <div class="contieneHistorias">
            <h1>HISTORIA</h1>
        </div>
        
</div>

    <footer class="footer">
        <p>&copy; 2023 Jorge Márquez, Ivan Caldera & Rita Camacho</p>
          <a class="enlaces" href="/acerca-de">Acerca de  </a>
        
      </footer>

@endsection