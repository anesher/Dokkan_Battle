<?php

require_once '../../libs/function/connect_bbdd.php';
require_once '../../class/usuario.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conseguir Piedras</title>
    <script>
        function conseguirPiedra() {
            fetch("conseguirPiedras.php", {
                    method: "POST"
                })
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        console.error("Error del servidor:", data.error);
                        alert("Error: " + data.error);
                    } else {
                        document.getElementById("piedras-count").innerText = data.piedras;
                    }
                })
                .catch(error => console.error("Error en la petición:", error));
        }
    </script>
</head>

<body>
    <h1>Conseguir Piedras</h1>
    <p>Piedras actuales: <span id="piedras-count">0</span></p>
    <button onclick="conseguirPiedra()">Conseguir Piedra</button>
</body>

</html>