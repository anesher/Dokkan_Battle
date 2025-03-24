<?php
include_once '../../class/Usuario.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['nombreUsuario']) || empty($_POST['contrasena'])) {
        echo "Por favor, completa todos los campos.";
    } else {
        $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
        $correo = filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL);
        $nombreUsuario = htmlspecialchars($_POST['nombreUsuario'], ENT_QUOTES, 'UTF-8');
        $contrasena = $_POST['contrasena'];

        if (!$correo) {
            echo "Correo electrónico no válido.";
        } else {
            try {
                $usuario = new Usuario($nombre, $correo, 50, $nombreUsuario, $contrasena, "user");
                $usuario->register(); // Registramos al usuario
                header("Location: login.php");
                exit();
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
    <!-- HEADER CON LOGO CENTRADO -->
    <header class="d-flex justify-content-center my-4">
        <img src="../../img/logo.webp" alt="Logo" class="img-fluid" style="max-width: 350px;">
    </header>

    <!-- Video de fondo -->
    <video autoplay loop muted class="video-bg">
        <source src="../../videos/Dragon Ball Sparking Zero Opening Intro Animation 4K.mp4">
    </video>
    <button class="position-absolute top-0 volver"><a href="../../index.php"><strong>Volver</strong></a></button>

    <!-- Contenedor Login (formulario) -->
    <div class="card p-4 shadow-lg" style="max-width: 400px; margin: auto;">
        <h1 class="text-center">Registrate</h1>
        <form class="form-signin" method="POST" action="registro.php">
            
            <!-- Contenedor Nombre -->
            <div class="form-floating mb-1">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                <label for="nombre">Nombre</label>
            </div>

            <!-- Contenedor Correo -->
            <div class="form-floating mb-1">
                <input type="email" class="form-control" id="correo" name="correo" placeholder="CorreoElectronico" required>
                <label for="correo">Correo</label>
            </div>

            <!-- Contenedor Nombre de Usuario --> 
            <div class="form-floating mb-1">
                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="Nombre de Usuario" required>
                <label for="nombreUsuario">Nombre De Usuario</label>
            </div>

            <!-- Contenedor Contraseña -->
            <div class="form-floating mb-1">
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                <label for="contrasena">Contraseña</label>
            </div>

            <button class="registrarse w-100" type="submit"><strong>Registrarse</strong></button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>