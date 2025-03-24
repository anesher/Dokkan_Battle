<?php
    include_once "../../class/Usuario.php";
    include_once "../../libs/function/connect_bbdd.php";

    session_start();
    
    $conexion = connect_bbdd();

    $usuario = mysqli_real_escape_string($conexion, $_SESSION['usuario']);

        $consulta = "SELECT * FROM usuario WHERE nombre_usuario = '".$usuario."'";

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
        <p>NOMBRE</p>
        <h3><?php echo $extraido['nombre'] ?></h3>
        <p>CORREO</p>
        <h3><?php echo $extraido['correo'] ?></h3>
        <p>NOMBRE DE USUARIO</p>
        <h3><?php echo $extraido['nombre_usuario'] ?></h3>
        <p>CONTRASEÑA</p>
        <h3><?php echo $extraido['contraseña'] ?></h3>
        <button class="editarPerfil"><a href="./editarUsuario.php">Editar perfil</a></button>
        </div>
    </div>
        </body>
</html>