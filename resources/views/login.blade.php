<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Volare</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
<div class="login negro">
    <div class="logoInicioSesion azul">
        <div class="imagenLogoW"></div>
    </div>
    <div class="inicioSesion">
        <h1>Inicio de sesión</h1>
        <form>
            <div class="formInicioSesion">
                <div class="mb-3">
                    <label for="inputEmail" class="form-label"></label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label"></label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
                </div>
                <div class="mb-3">
                    <a style="color:white; font-size: 0.6rem; padding-inline: 0.5rem" href="/">Olvidé mi contraseña</a>
                </div>
                <div class="mb-3 botonLogin">
                    <button type="submit" style="color: white; font-size: 1rem; font-weight: bold" class="btn btn-primary azul">Iniciar sesión</button>
                </div>
            </div>
            <input type="button" class="btn btn-primary ojo" id="ojo">
        </form>
    </div>
</div>
</body>
</html>
