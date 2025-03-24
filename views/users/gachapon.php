<?php
session_start();
require_once "../../libs/function/connect_bbdd.php";
require_once "../../class/Usuario.php";

if (!isset($_SESSION['usuario'])) {
    echo json_encode(["error" => "Debes iniciar sesión."]);
    exit;
}

$pdo = connect_bbdd();
$usuario = new Usuario($pdo);
$usuario->$_SESSION['user_id'];

// Verificar si tiene suficientes piedras
if ($usuario->getPiedras() < 5) {
    echo json_encode(["error" => "No tienes suficientes piedras."]);
    exit;
}

// Restar 5 piedras
$usuario->setPiedras($usuario->getPiedras() - 5);

// Obtener personaje aleatorio
$personaje = $usuario->obtenerPersonajeAleatorio();

if ($personaje) {
    echo json_encode(["success" => true, "personaje" => $personaje]);
} else {
    echo json_encode(["error" => "No se encontró ningún personaje."]);
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gachapon</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
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
            <p class="gachaDescrip">¡ Prueba tu suerte y hazte con los personajes mas fuertes del universo de Dragon Ball !</p>
            <img src="../../img/gachapon.webp" alt="Gachapon">
            <p class="costePiedras">Coste: 5 piedras</p>
            <button class="btn-gachapon" onclick="location.href='video.html'">TIRAR</button>
            <div id="resultadoGachapon"></div>

            <script>
                document.getElementById("tirarGachapon").addEventListener("click", function() {
                    fetch("tirar_gachapon.php")
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                document.getElementById("resultadoGachapon").innerHTML = `
                <h2>¡Has conseguido a ${data.personaje.name}!</h2>
                <img src="../../img/personajes/${data.personaje.image}" alt="${data.personaje.name}">
                <p>${data.personaje.description}</p>
            `;
                            } else {
                                alert(data.error);
                            }
                        })
                        .catch(error => console.error("Error:", error));
                });
            </script>
        </div>
    </div>
</body>

</html>