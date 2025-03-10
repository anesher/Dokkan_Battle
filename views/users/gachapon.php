<?php
include_once "../../class/Usuario.php";

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gachapon</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body style="background-color: blue;">
    <div class="main">
        <header class="headerIniciado">
        <div class="logo-inicio">
            <a href="/index.php"><img src="/img/logo.webp" alt="Logo"></a>
        </div>
            <div class="botones">
            <input type="number" readonly value="0" id="piedras" name="piedras">
            <button class="conseguirPiedras"><a href="./views/users/conseguirPiedras.php"><strong>CONSEGUIR PIEDRAS</strong></a></button>
            <div class="botones2">
            <button class="perfil"><a href="./views/users/perfil.php"><strong>PERFIL</strong></a></button>
            <button class="inventario"><a href="./views/users/inventario.php"><strong>INVENTARIO</strong></a></button>
            <button class="gachapon"><a href="./views/users/gachapon.php"><strong>GACHAPÓN</strong></a></button>
            </div>
            </div>
        </header>
        <div class="contenedor-gachapon">
            <img src="/img/gachapon.png">
            <h1>Titulo Gachapon</h1>
            <p>Descripcion</p>
        </div>
    </div>
</body>
</html>
