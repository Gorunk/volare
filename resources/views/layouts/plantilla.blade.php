<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
<div class="pagina">
    <div class="navLateral azul">
        <a class="elemento" href="/dashboard")><div class="iconBrgr"></div></a>
        <a class="elemento blancoBorde" href="/dashboard" title="DashBoard"><div class="iconDB"></div></a>
        <a class="elemento" href="/vuelos"><div title="Listado de Vuelos" class="iconVuelos"></div></a>
        <a class="elemento" href="/ventas"><div title="Listado de Ventas" class="iconVentas"></div></a>
        <a class="elemento" href="/users"><div title="Listado de Usuarios" class="iconUsers"></div></a>
    </div>
    <div>
        <div class="navSuperior negroNav blancoTexto">
            <div class="imagenLogoNavbar"></div>
        </div>
        @yield('content')
    </div>
</div>
</body>
</html>
