.<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}">
    <title>@yield('title')</title>
</head>
<form action="logout" method="GET" style="display: inline">
    @csrf
    <a class="CerrarSession" href="#" onclick="this.closest('form').submit()">Cerrar Sesion</a>
</form>

<body>
    @yield('content')
    
</body>
</html>