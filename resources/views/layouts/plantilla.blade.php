<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="blancoFondo">
<div class="pagina">
    <div class="navLateral azul">
        <a href="/dashboard")><div id="iconBrgr"></div></a>
        <a class="elemento" href="/dashboard" title="DashBoard"><div id="iconDB"></div></a>
        <a class="elemento" href="/vuelos"><div title="Listado de Vuelos" id="iconVuelos"></div></a>
        <a class="elemento" href="/ventas"><div title="Listado de Ventas" id="iconVentas"></div></a>
        <a class="elemento" href="/users"><div title="Listado de Usuarios" id="iconUsers"></div></a>
    </div>
    <div>
        <div class="navSuperior negroNav blancoTexto">
            <a href="/" class="linkLogoNav"><div class="imagenLogoNavbar"></div></a>
            <div>
                <div class="blancoFondo">
                    <a href="/dashboard" title="Lupa"><div id="iconLupa"></div></a>
                </div>
                @auth
                <div><h4>{{"USUARIO"}}</h4></div>
                @endauth
            </div>
        </div>
        <fieldset class="content">
            @yield('content')
        </fieldset>
    </div>
</div>
</body>
</html>
