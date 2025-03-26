<?php
    include_once "../../class/Usuario.php";
    include_once "../../libs/function/connect_bbdd.php";

    session_start();

    // Verificar si el usuario está autenticado
    if (!isset($_SESSION['logueado']) || !$_SESSION['logueado']) {
    header("Location: ../../index.php");
    exit();
    } else {
        $user_id = $_SESSION['id_usuario'];
    }

    $conexion = connect_bbdd();
    
    $usuario = mysqli_real_escape_string($conexion, $user_id);

        $consulta = "SELECT * FROM usuario WHERE id_usuario = '".$usuario."'";

    $resultado = mysqli_query($conexion, $consulta);

        mysqli_data_seek($resultado, 0);

        $extraido = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css"></head>
    <link rel="stylesheet" type="text/css" href="../../css/miguel.css"></head>
<body>
    <video autoplay muted loop id="">
        <source src="../../videos/fondo.mp4" type="video/mp4">
    </video>
    <div class="main">
        <header class="headerIniciado">
        <div class="logo-inicio">
            <a href="./../../index.php"><img src="../../img/logo.webp" alt="Logo"></a>
        </div>
            <div class="botones">
            <input type="number" readonly value="<?php echo $extraido['piedra'] ?>" id="piedras" name="piedras">
            <button class="conseguirPiedras"><a href="./conseguirPiedras.php">CONSEGUIR PIEDRAS</a></button>
            <div class="botones2">
            <button class="perfil"><a href="./perfil.php">PERFIL</a></button>
            <button class="inventario"><a href="./inventario.php">INVENTARIO</a></button>
            <button class="gachapon"><a href="./gachapon.php">GACHAPON</a></button>
            </div>
            </div>
        </header>
        <div class="contenedor-perfil">
        <h2>NOMBRE</h2>
        <h3><?php echo $extraido['nombre'] ?></h3>
        <h2>CORREO</h2>
        <h3><?php echo $extraido['correo'] ?></h3>
        <h2>NOMBRE DE USUARIO</h2>
        <h3><?php echo $extraido['nombre_usuario'] ?></h3>
        <h2>CONTRASEÑA</h2>
        <h3><?php echo $extraido['contraseña'] ?></h3>
        <button class="editarPerfil"><a href="./editarUsuario.php">Editar perfil</a></button>
        </div>
    </div>
        </body>
</html>