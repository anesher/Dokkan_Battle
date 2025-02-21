<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>

    <!-- HEADER CON LOGO CENTRADO -->
    <header class="d-flex justify-content-center my-4">
        <img src="./img/logo.webp" alt="Logo" class="img-fluid" style="max-width: 350px;">
    </header>

    <!-- Video de fondo -->
    <video autoplay loop muted class="video-bg">
        <source src="./videos/Dragon Ball Sparking Zero Opening Intro Animation 4K.mp4">
    </video>
    <button class="position-absolute top-0 volver"><a href="index.php"><strong>Volver</strong></a></button>
    <!-- Contenedor Login (formulario) -->
    <div class="card p-4 shadow-lg" style="max-width: 400px; margin: auto;">
        <h1 class="text-center"><strong>Regístrate</strong></h1>
        <form class="form-signin" method="POST" action="registro.php">
            
            <!-- Contenedor Nombre -->
            <div class="form-floating mb-1">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                <label for="nombre">Nombre</label>
            </div>

            <!-- Contenedor Correo -->
            <div class="form-floating mb-1">
                <input type="text" class="form-control" id="correo" name="correo" placeholder="CorreoElectronico">
                <label for="correo">Correo</label>
            </div>

            <!-- Contenedor Nombre de Usuario --> 
            <div class="form-floating mb-1">
                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="Nombre de Usuario">
                <label for="nombreUsuario">Nombre De Usuario</label>
            </div>

            <!-- Contenedor Contraseña -->
            <div class="form-floating mb-1">
                <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña">
                <label for="contraseña">Contraseña</label>
            </div>

            <!-- Contenedor Tipo de usuario -->
            <div class="form-floating mb-1">
                <input type="text" class="form-control" id="tipoDeUsuario" name="tipoDeUsuario" placeholder="Tipo De Usuario">
                <label for="tipoDeUsuario">Tipo de Usuario</label>
            </div>

            <button class="registrarse w-100"type="submit"><strong>Registrarse</strong></button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
