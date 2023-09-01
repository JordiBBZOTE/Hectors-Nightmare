@extends('layouts.plantillalogged')

@section('title', 'scores')
<link rel="stylesheet" href="{{asset('/css/styles.css')}}">

@section('content')
<div class="supercontainer">

    <form action="home" method="POST">
        @csrf
        <a class="enlaces" href="#" onclick="this.closest('form').submit()">Cerrar Sesion</a>
    </form>

    @if(session('username'))
    <br>
    {{session('username')}}
    @endif

    <div class="TituloBanner">
    <h1>TABLA DE POSICIONES</h1>






</div>
    <footer class="footer">
        <p>&copy; 2023 Jorge Márquez, Ivan Caldera & Rita Camacho</p>
          <a class="enlaces" href="/acerca-de">Acerca de  </a>
        
      </footer>

@endsection