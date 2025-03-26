<?php
require_once "../../libs/function/connect_bbdd.php";
session_start();

function obtenerPersonajeAleatorio($db) {
    $query = "SELECT id, name, ki, maxKi, race, gender, description, image, affiliation 
              FROM cartas 
              WHERE deletedAt IS NULL 
              ORDER BY RAND() 
              LIMIT 1";

    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();

    return $result->fetch_assoc();
}

$db = connect_bbdd();

// Procesar la solicitud POST al hacer clic en "Tirar"
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $personaje = obtenerPersonajeAleatorio($db);
    if ($personaje) {
        $_SESSION['ultimo_personaje'] = $personaje;
        header("Location: tiradaGachapon.php");
        exit();
    } else {
        echo json_encode(["success" => false, "error" => "Error al obtener personaje."]);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gachapon</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link rel="stylesheet" type="text/css" href="../../css/miguel.css">
</head>
<body>
    <video autoplay muted loop id="">
        <source src="../../videos/fondo.mp4" type="video/mp4">
    </video>
    <div class="main">
        <header class="headerIniciado">
            <div class="logo-inicio">
                <a href="../../index.php"><img src="../../img/logo.webp" alt="Logo"></a>
            </div>

            <div class="botones">
                <input type="number" readonly value="0" id="piedras" name="piedras">
                <button class="conseguirPiedras"><a href="./conseguirPiedras.php">CONSEGUIR PIEDRAS</a></button>
            </div>

            <div class="botones2">
                <button class="perfil"><a href="./perfil.php">PERFIL</a></button>
                <button class="inventario"><a href="./inventario.php">INVENTARIO</a></button>
                <button class="gachapon"><a href="./gachapon.php">GACHAPON</a></button>
            </div>
        </header>
        <div class="contenedor-gachapon">
            <h1>FUSION POWER</h1>
            <p class="gachaDescrip">¡Prueba tu suerte y hazte con los personajes más fuertes del universo de Dragon Ball!</p>
            <img src="../../img/gachapon.webp" alt="Gachapon">
            <p class="costePiedras">Coste: 5 piedras</p>
            
            <!-- Formulario POST para enviar la solicitud -->
            <form method="POST" action="gachapon.php">
                <button type="submit" id="tirarGachapon">TIRAR</button>
            </form>
        </div>
    </div>
</body>
</html>