<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gachapon</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css"></head>
    <link rel="stylesheet" type="text/css" href="/css/miguel.css"></head>
<body>
    <video autoplay muted loop id="">
        <source src="/videos/fondo.mp4" type="video/mp4">
    </video>
    <div class="main">
        <header class="headerIniciado">
        <div class="logo-inicio">
            <a href="/index.php"><img src="/img/logo.webp" alt="Logo"></a>
        </div>
            <div class="botones">
            <input type="number" readonly value="0" id="piedras" name="piedras">
            <button class="conseguirPiedras"><a href="/views/users/conseguirPiedras.php">CONSEGUIR PIEDRAS</a></button>
            <div class="botones2">
            <button class="perfil"><a href="/views/users/perfil.php">PERFIL</a></button>
            <button class="inventario"><a href="/views/users/inventario.php">INVENTARIO</a></button>
            <button class="gachapon"><a href="/views/users/gachapon.php">GACHAPÓN</a></button>
            </div>
            </div>
        </header>
        <div class="contenedor-perfil">
        <img src="/img/foto_miguel.jpg" alt="Perfil">
        <p>Nombre</p>
        <!-- Aqui poner el nombre que se metio en el registro-->
        <p>Correo</p>
        <!-- Aqui poner el correo que se metio en el registro-->
        <p>Nombre de usuario</p>
        <!-- Aqui poner el usuario que se metio en el registro-->
        <p>Contraseña</p>
        <!-- Aqui poner lka contraseña que se metio en el registro-->
        <button><a href="/views/users/editarPerfil.php">Editar perfil</a></button>
        </div>
    </div>
        </body>
</html>