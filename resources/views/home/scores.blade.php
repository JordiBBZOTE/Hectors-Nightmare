@extends('layouts.plantillalogged')

@section('title', 'scores')
<link rel="stylesheet" href="{{asset('/css/styles.css')}}">

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