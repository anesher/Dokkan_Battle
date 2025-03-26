<?php
session_start();

include_once "../../class/Usuario.php";
include_once "../../libs/function/connect_bbdd.php";

// Verificar si el usuario está autenticado
if (!isset($_SESSION['logueado']) || !$_SESSION['logueado']) {
    header("Location: ../../index.php");
    exit();
    } else {
        $user_id = $_SESSION['id_usuario'];
    }

    $conexion = connect_bbdd();

    $usuario = mysqli_real_escape_string($conexion, $user_id);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['contrasena'])) {
                echo "Por favor, completa todos los campos.";
            } else {
                $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
                $correo = filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL);
                $nombreUsuario = htmlspecialchars($_POST['usuario'], ENT_QUOTES, 'UTF-8');
                $contrasena = $_POST['contrasena'];
        
                if (!$correo) {
                    echo "Correo electrónico no válido.";
                } else {
                    try {
                        $update = "UPDATE usuario SET nombre = '$nombre', correo = '$correo', nombre_usuario = '$nombreUsuario', contraseña = '$contrasena' WHERE id_usuario = '$usuario'";
                        $resultado = mysqli_query($conexion, $update);

                        if (!$resultado) {
                            echo "Error al actualizar los datos.";
                        } else {
                            header("Location: perfil.php");
                            exit();
                        }
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
    <title>Editar perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
    <!-- Botón "Volver" en la esquina superior izquierda -->
    <div class="position-absolute top-0 start-0 m-3">
        <a href="./perfil.php" class="volver">Volver</a>
    </div>

    <!-- Video de fondo -->
    <video autoplay loop muted class="video-bg">
        <source src="../../videos/fondo.mp4">
    </video>

    <!-- Contenedor formulario -->
    <div class="card p-4 shadow-lg" style="max-width: 400px; margin-top: 100px; margin-left: auto; margin-right: auto;">
        <h1 class="text-center">Editar perfil</h1>
        <form class="form-signin" method="POST" action="editarUsuario.php">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                <label for="nombre">Nombre</label>
            </div>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" required>
                <label for="correo">Correo</label>

            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
                <label for="usuario">Usuario</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" required>
                <label for="contraseña">Contraseña</label>
            </div>

            <button class="inicio-sesion w-100 btn btn-lg btn-custom" type="submit">Aceptar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>