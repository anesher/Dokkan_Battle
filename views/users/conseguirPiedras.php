<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conseguir piedras</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">

</head>
<body>
    <div class="main">
        <video autoplay loop muted id="video-bd">
            <source src="./videos/fondo.mp4" type="video/mp4">
        </video>
        <header class="headerIniciado">
        <div class="logo-inicio">
            <a href="../../index.php"><img src="../../img/logo.webp" alt="Logo"></a>
        </div>
            <div class="botones">
            <input type="number" readonly value="0" id="piedras" name="piedras">
            <button class="conseguirPiedras"><a href="./conseguirPiedras.php">CONSEGUIR PIEDRAS</a></button>
            <div class="botones2">
            <button class="perfil"><a href="./perfil.php">PERFIL</a></button>
            <button class="inventario"><a href="./inventario.php">INVENTARIO</a></button>
            <button class="gachapon"><a href="./gachapon.php">GACHAPON</a></button>
            </div>
            </div>
        </header>

        <div class="container">
            <div class="container">
                <h1>¡Consigue las Piedras del Dragón!</h1>
            </div>

            <div class="container-img">  
                <img src="../../img/conseguirPiedras.avif" alt="Conseguir Piedras" class="img-fluid">
            </div>

            <div class="container">  
                <button class="piedras">Click aquí para conseguir piedras</button>
            </div>
        </div>
    </div>
</body>
</html>
