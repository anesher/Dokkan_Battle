<?php
session_start();
include_once "../../class/Usuario.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST['usuario']) || !isset($_POST['contrasena'])) {
        $_SESSION['error'] = "Por favor, completa todos los campos.";
        header("Location: login.php");
        exit();
    }

    $nombreUsuario = htmlspecialchars($_POST['usuario'], ENT_QUOTES, 'UTF-8');
    $contrasena = $_POST['contrasena'];

    try {
        $usuario = new Usuario();
        $usuario->setNombreUsuario($nombreUsuario);
        $usuario->setContrasena($contrasena);
        
        if ($usuario->login()) {
            header("Location: gachapon.php");
            exit();
        } else {
            $_SESSION['error'] = "Usuario o contraseña incorrectos.";
            header("Location: login.php");
            exit();
        }
    } catch (Exception $e) {
        $_SESSION['error'] = "Error: " . $e->getMessage();
        header("Location: login.php");
        exit();
    }
}

// Mostrar errores si existen
$error = $_SESSION['error'] ?? '';
unset($_SESSION['error']);
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
    <div class="position-absolute top-0 start-0 m-3">
        <a href="../../index.php" class="volver">Volver</a>
    </div>

    <header class="d-flex justify-content-center my-4">
        <img src="../../img/logo.webp" alt="Logo" class="img-fluid" style="max-width: 350px;">
    </header>

    <video autoplay loop muted class="video-bg">
        <source src="../../videos/Dragon Ball Sparking Zero Opening Intro Animation 4K.mp4">
    </video>

    <div class="card p-4 shadow-lg" style="max-width: 400px; margin: auto;">
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>
        
        <h1 class="text-center">Iniciar sesión</h1>
        <form method="POST" action="login.php">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
                <label for="usuario">Usuario</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                <label for="contrasena">Contraseña</label>
            </div>

            <button class="inicio-sesion w-100 btn btn-lg btn-custom" type="submit"><strong>Iniciar Sesion</strong></button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>