@extends('layouts.scores')

@section('title', 'scores')

@section('content')
<div class="supercontainer">

   

    @if(session('username'))
    <br>
    {{session('username')}}
    @endif

    <div class="TituloBanner">
    <h1>TABLA DE POSICIONES</h1>


    


</div>

@endsection