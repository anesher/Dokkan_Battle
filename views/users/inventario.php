<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
    <div class="main">
        
        <header class="headerIniciado">
        <div class="logo-inicio">
            <a href="../../index.php"><img src="../../img/logo.webp" alt="Logo"></a>
        </div>
            <div class="botones">
            <input type="number" readonly value="0" id="piedras" name="piedras">
            <button class="conseguirPiedras"><a href="./conseguirPiedras.php">CONSEGUIR PIEDRAS</a></button>
            <div class="botones2">
            <button class="perfil"><a href=".perfil.php">PERFIL</a></button>
            <button class="inventario"><a href="./inventario.php">INVENTARIO</a></button>
            <button class="gachapon"><a href="./gachapon.php">GACHAPON</a></button>
            </div>
            </div>
        </header>
        <section class="container-inventario">
            <article>
                <a href="">
                <div class="logo-inicio">
                    <!--Imagen del personaje-->
                    <img src="../../img/foto_miguel.jpg">
                </div>
                <!--Nombre del personaje-->
                <h3>Nombre</h3>
                </a>
            </article>

            <article>
            <a href="">
                <div class="logo-inicio">
                    <!--Imagen del personaje-->
                    <img src="../../img/foto_miguel.jpg">
                </div>
                <!--Nombre del personaje-->
                <h3>Nombre</h3>
                </a>
            </article>

            <article>
            <a href="">
                <div class="logo-inicio">
                    <!--Imagen del personaje-->
                    <img src="../../img/foto_miguel.jpg">
                </div>
                <!--Nombre del personaje-->
                <h3>Nombre</h3>
                </a>
            </article>
        </section>
    </div>
</body>
</html>
