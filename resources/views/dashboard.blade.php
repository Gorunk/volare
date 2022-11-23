@extends('layouts.plantilla')

@section('title', 'DashBoard')

@section('content')
    <h1>DASHBOARD</h1><br><br>
    <div class="dashgrid">
        <fieldset class="blancoFondo">
            <h2>Últimas compras</h2>
            <table class="dashCompras">
                <tr class="dashComprasTabla blancoTexto azul">
                    <th>USUARIO</th>
                    <th>VUELO</th>
                    <th>RESERVA</th>
                    <th>DESTINO</th>
                    <th>ORIGEN</th>
                    <th>ACCIONES</th>
                </tr>
                <tr class="dashComprasTabla" style="background: #ffffff">
                    <td>Jesús Delgado</td>
                    <td>F123N</td>
                    <td>00457ABV</td>
                    <td>Sevilla</td>
                    <td>Madrid</td>
                    <td>simbolos</td>
                </tr>
                <tr class="dashComprasTabla" style="background: #ffffff">
                    <td>Jesús Delgado</td>
                    <td>F123N</td>
                    <td>00457ABV</td>
                    <td>Sevilla</td>
                    <td>Madrid</td>
                    <td>simbolos</td>
                </tr>
                <tr class="dashComprasTabla" style="background: #ffffff">
                    <td>Jesús Delgado</td>
                    <td>F123N</td>
                    <td>00457ABV</td>
                    <td>Sevilla</td>
                    <td>Madrid</td>
                    <td>simbolos</td>
                </tr>
                <tr class="dashComprasTabla" style="background: #ffffff">
                    <td>Jesús Delgado</td>
                    <td>F123N</td>
                    <td>00457ABV</td>
                    <td>Sevilla</td>
                    <td>Madrid</td>
                    <td>simbolos</td>
                </tr>
            </table>
        </fieldset>
        <fieldset class="blancoFondo">
            <h2>Vuelos con plazas vacantes</h2>
        </fieldset>
    </div>
@endsection
