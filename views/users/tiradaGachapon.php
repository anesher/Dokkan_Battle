<?php
session_start();
if (!isset($_SESSION['logueado']) || !$_SESSION['logueado']) {
    header("Location: ../../index.php");
    exit();
}
$personaje = $_SESSION['ultimo_personaje'];
unset($_SESSION['ultimo_personaje']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Has obtenido a <?= htmlspecialchars($personaje['name']) ?>!</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/miguel.css">
</head>
<body>
    <video autoplay muted loop>
        <source src="../../videos/fondo.mp4" type="video/mp4">
    </video>
    <div class="main">
        <header class="headerIniciado">
        <div class="logo-inicio">
                <a href="../../index.php"><img src="../../img/logo.webp" alt="Logo"></a>
            </div>
            <div class="botones">
                <input type="number" readonly value="0" id="piedras">
                <button class="conseguirPiedras"><a href="./conseguirPiedras.php">CONSEGUIR PIEDRAS</a></button>
                <div class="botones2">
                    <button class="perfil"><a href="./perfil.php">PERFIL</a></button>
                    <button class="inventario"><a href="./inventario.php">INVENTARIO</a></button>
                    <button class="gachapon"><a href="./gachapon.php">GACHAPON</a></button>
                </div>
            </div>
        </header>
        <div class="contenedor-tirada">
            <h2>¡Has obtenido a <?= htmlspecialchars($personaje['name']) ?>!</h2>
            <img src="<?= htmlspecialchars($personaje['image']) ?>" alt="<?= htmlspecialchars($personaje['name']) ?>">
            <h2><?= htmlspecialchars($personaje['description']) ?></h2>
            <button><a href="gachapon.php">Volver al Gachapon</a></button>
        </div>
    </div>
</body>
</html>