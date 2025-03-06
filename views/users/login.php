<?php
session_start();
include_once "../../class/Usuario.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['usuario']) || !isset($_POST['contrasena'])) {
        echo "Por favor, completa todos los campos.";
    } else {
        $nombre = htmlspecialchars($_POST['usuario'], ENT_QUOTES, 'UTF-8');
        $contrasena = $_POST['contrasena'];
        try {
            $usuario = new Usuario();
            $usuario->setNombreUsuario($nombre);
            $usuario->setContrasena($contrasena);
            if ($usuario->login()) {
                $_SESSION['usuario'] = $nombre;
                header("Location: gachapon.php");
                exit();
            } else {
                echo "Usuario o contraseña incorrectos.";
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
    <!-- Botón "Volver" en la esquina superior izquierda -->
    <div class="position-absolute top-0 start-0 m-3">
        <a href="../../index.php" class="volver">Volver</a>
    </div>

    <!-- HEADER CON LOGO CENTRADO -->
    <header class="d-flex justify-content-center my-4">
        <img src="../../img/logo.webp" alt="Logo" class="img-fluid" style="max-width: 350px;">
    </header>

    <!-- Video de fondo -->
    <video autoplay loop muted class="video-bg">
        <source src="../../videos/Dragon Ball Sparking Zero Opening Intro Animation 4K.mp4">
    </video>

    <!-- Contenedor Login (formulario) -->
    <div class="card p-4 shadow-lg" style="max-width: 400px; margin: auto;">
        <h1 class="text-center">Iniciar sesiOn</h1>
        <form class="form-signin" method="POST" action="login.php">
            <!-- Contenedor Correo o Usuario -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                <label for="usuario">Usuario</label>
            </div>

            <!-- Contenedor Contraseña -->
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña">
                <label for="contraseña">Contraseña</label>
            </div>

            <!-- Botón Iniciar Sesión -->
            <button class="inicio-sesion w-100 btn btn-lg btn-custom" type="submit"><strong>Iniciar Sesion</strong></button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>