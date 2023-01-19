@extends('layouts.plantilla')

@section('title', 'DashBoard')

@section('content')
    <h1>DASHBOARD</h1><br><br>
    <div class="dashgrid">
        <fieldset class="blancoFondo">
            <h2>Últimas compras</h2>
            <table class="dashCompras tablaAcciones">
                <tr class="dashComprasTabla blancoTexto azul">
                    <th>USUARIO</th>
                    <th>VUELO</th>
                    <th>RESERVA</th>
                    <th>DESTINO</th>
                    <th>ORIGEN</th>
                    <th>ACCIONES</th>
                </tr>
                <tr class="dashComprasTabla" style="background: #ffffff">
                    <td>{{"Jesús Delgado"}}</td>
                    <td>{{"F123N"}}</td>
                    <td>{{"00457ABV"}}</td>
                    <td>{{"Sevilla"}}</td>
                    <td>{{"Madrid"}}</td>
                    <td>
                        <a class="iconTabla" href="/dashboard" title="Editar"><div id="iconLapiz"></div></a>
                        <a class="iconTabla" href="/dashboard" title="Borrar"><div id="iconPapelera"></div></a>
                    </td>
                </tr>
                <tr class="dashComprasTabla" style="background: #ffffff">
                    <td>{{"Jesús Delgado"}}</td>
                    <td>{{"F123N"}}</td>
                    <td>{{"00457ABV"}}</td>
                    <td>{{"Sevilla"}}</td>
                    <td>{{"Madrid"}}</td>
                    <td>
                        <a class="iconTabla" href="/dashboard" title="Editar"><div id="iconLapiz"></div></a>
                        <a class="iconTabla" href="/dashboard" title="Borrar"><div id="iconPapelera"></div></a>
                    </td>
                </tr>
                <tr class="dashComprasTabla" style="background: #ffffff">
                    <td>{{"Jesús Delgado"}}</td>
                    <td>{{"F123N"}}</td>
                    <td>{{"00457ABV"}}</td>
                    <td>{{"Sevilla"}}</td>
                    <td>{{"Madrid"}}</td>
                    <td>
                        <a class="iconTabla" href="/dashboard" title="Editar"><div id="iconLapiz"></div></a>
                        <a class="iconTabla" href="/dashboard" title="Borrar"><div id="iconPapelera"></div></a>
                    </td>
                </tr>
                <tr class="dashComprasTabla" style="background: #ffffff">
                    <td>{{"Jesús Delgado"}}</td>
                    <td>{{"F123N"}}</td>
                    <td>{{"00457ABV"}}</td>
                    <td>{{"Sevilla"}}</td>
                    <td>{{"Madrid"}}</td>
                    <td>
                        <a class="iconTabla" href="/dashboard" title="Editar"><div id="iconLapiz"></div></a>
                        <a class="iconTabla" href="/dashboard" title="Borrar"><div id="iconPapelera"></div></a>
                    </td>
                </tr>
            </table>
        </fieldset>
        <fieldset class="blancoFondo">
            <h2>Vuelos con plazas vacantes</h2>
            <ul class="vuelosVacantes">
                <li>
                    <fieldset style="background: white">
                        <div>Vuelo {{"F123G"}}</div>
                        <div>
                            <div>{{"Sevilla"}} - {{"Madrid"}}</div>
                            <div>44%</div>
                        </div>
                        <progress id="progresoVuelos" value="44" max="100"></progress>
                    </fieldset>
                </li>
                <li>
                    <fieldset style="background: white">
                        <div>Vuelo {{"F123G"}}</div>
                        <div>
                            <div>{{"Sevilla"}} - {{"Madrid"}}</div>
                            <div>44%</div>
                        </div>
                        <progress id="progresoVuelos" value="44" max="100"></progress>
                    </fieldset>
                </li>
                <li>
                    <fieldset style="background: white">
                        <div>Vuelo {{"F123G"}}</div>
                        <div>
                            <div>{{"Sevilla"}} - {{"Madrid"}}</div>
                            <div>44%</div>
                        </div>
                        <progress id="progresoVuelos" value="44" max="100"></progress>
                    </fieldset>
                </li>
                <li>
                    <fieldset style="background: white">
                        <div>Vuelo {{"F123G"}}</div>
                        <div>
                            <div>{{"Sevilla"}} - {{"Madrid"}}</div>
                            <div>44%</div>
                        </div>
                        <progress id="progresoVuelos" value="44" max="100"></progress>
                    </fieldset>
                </li>
            </ul>
        </fieldset>
    </div>
@endsection
