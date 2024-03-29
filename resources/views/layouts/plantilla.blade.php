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
        <a href="{{route('logout')}}")><div id="iconBrgr"></div></a>
        <a class="elemento" href="/dashboard" title="DashBoard"><div id="iconDB"></div></a>
        <a class="elemento" href="/vuelos"><div title="Listado de Vuelos" id="iconVuelos"></div></a>
        <a class="elemento" href="/ventas"><div title="Listado de Ventas" id="iconVentas"></div></a>
        <a class="elemento" href="/users"><div title="Listado de Usuarios" id="iconUsers"></div></a>
    </div>
    <div>
        <div class="navSuperior negroNav blancoTexto">
            <a href="/" class="linkLogoNav"><div class="imagenLogoNavbar"></div></a>
            <div id="userMenuNav">
                <div class="blancoFondo" id="btnLupa">
                    <a href="/dashboard" title="Lupa"><div id="iconLupa"></div></a>
                </div>
                @auth
                <div id="imagenUser"></div>
                <div>
                    <div class="dropdown">
                        <div onclick="showDrop" class="dropbtn" id="dropbtnUser"><h4>{{strtoupper(auth()->user()->name)}}<span id="flechaArribaAbajo"> ▾</span></h4></div>
                        <div id="dropUser" class="dropUserContent">
                            <a href="{{route('logout')}}">Logout</a>
                        </div>
                    </div>
                    {{--<h3>{{strtoupper(auth()->user()->name)}}</h3>--}}
                </div>
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
