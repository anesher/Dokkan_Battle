<?php
require_once "../../libs/function/connect_bbdd.php";
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['logueado']) || !$_SESSION['logueado']) {
    header("Location: ../../index.php");
    exit();
}


function obtenerPersonajeAleatorio($db)
{
    $query = "SELECT id, name, image, description 
              FROM cartas 
              WHERE deletedAt IS NULL 
              ORDER BY RAND() 
              LIMIT 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

// Procesar la tirada
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = connect_bbdd();
    $user_id = $_SESSION['id_usuario'];
    $personaje = obtenerPersonajeAleatorio($db);

    if ($personaje) {
        // Registrar en la tabla tiradas
        $query = "INSERT INTO tiradas (id_usuario, id_personaje) VALUES (?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bind_param("ii", $user_id, $personaje['id']);
        $stmt->execute();

        $_SESSION['ultimo_personaje'] = $personaje;
        header("Location: tiradaGachapon.php");
        exit();
    } else {
        echo "<script>alert('Error al obtener personaje');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gachapon</title>
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
                    <button class="gachapon"><a href="./gachapon.php">GACHAPÓN</a></button>
                </div>
            </div>
        </header>
        <div class="contenedor-gachapon">
            <h1>FUSION POWER</h1>
            <form method="POST">
                <p class="gachaDescrip">¡ Prueba tu suerte y hazte con los personajes mas fuertes del universo de Dragon Ball !</p>
                <img src="../../img/gachapon.webp" alt="Gachapon">
                <p class="costePiedras">Coste: 5 piedras</p>
                <button type="submit" id="tirarGachapon">TIRAR (5 PIEDRAS)</button>
            </form>
        </div>
    </div>
</body>

</html>