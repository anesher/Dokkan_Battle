<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gachapon</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
    <div class="main">
    <video autoplay loop muted>
<source src="/videos/fondo.mp4" type="video/mp4">
</video>
        <header class="headerIniciado">
        <div class="logo-inicio">
            <a href="/index.php"><img src="/img/logo.webp" alt="Logo"></a>
        </div>
            <div class="botones">
            <input type="number" readonly value="0" id="piedras" name="piedras">
            <button class="conseguirPiedras"><a href="conseguirPiedras.php"><strong>CONSEGUIR PIEDRAS</strong></a></button>
            <div class="botones2">
            <button class="perfil"><a href="perfil.php"><strong>PERFIL</strong></a></button>
            <button class="inventario"><a href="inventario.php"><strong>INVENTARIO</strong></a></button>
            <button class="gachapon"><a href="gachapon.php"><strong>GACHAPÓN</strong></a></button>
            </div>
            </div>
        </header>
        <div class="contenedor-gachapon">
            <video autoplay loop muted>
                <source src="./videos/gachapon.mp4">
            </video>
        </div>
    </div>
</body>
</html>
