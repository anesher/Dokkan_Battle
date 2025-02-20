<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<header class="text-center mb-5">
    <img src="/img/logo.png" alt="">
    <h1 class="text-center">Registrarse</h1>
</header>
<body>
    <div class="position-absolute top-0 start-0 m-3">
        <a href="index.php" class="btn btn-primary">Volver</a>
    </div>
    <!-- Contenedor Login (formulario) -->
    <div class="card p-4 shadow-lg" style="max-width: 400px; margin: auto;">
        <form class="form-signin" method="POST" action="registro.php">
        <!-- Contenedor Nombre -->
        <div class="form-floating mb-1">
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
        <label for="nombre">Nombre</label>
    </div>
    <!-- Contenedor Correo -->
    <div class="form-floating mb-1">
        <input type="text" class="form-control" id="correo" name="correo" placeholder="CorreoElectronico">
        <label for="correo">Correo </label>
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
        <input type="text" class="form-control" id="tipoDeUsuario" name="tipoDeUsuario" placeholder="Tipo De Uusario">
        <label for="tipoDeUusario">Tipo de Usuario</label>
    </div>
    <!-- Boton -->
    <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button>
</form>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>