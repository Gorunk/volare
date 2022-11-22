@extends('layouts.plantilla')

@section('title', 'DashBoard')

@section('content')
    <h1>DASHBOARD</h1><br><br>
    <div class="dashgrid">
        <fieldset class="blancoFondo">
            <h2>Últimas compras</h2>
            <table class="dashCompras">
                <tr class="blancoTexto azul">
                    <th>USUARIO</th>
                    <th>VUELO</th>
                    <th>RESERVA</th>
                    <th>DESTINO</th>
                    <th>ORIGEN</th>
                    <th>ACCIONES</th>
                </tr>
            </table>
        </fieldset>
        <fieldset class="blancoFondo">
            <h2>Vuelos con plazas vacantes</h2>
        </fieldset>
    </div>
@endsection
