<?php
session_start();
require_once "../../libs/function/connect_bbdd.php";

if (!isset($_SESSION['logueado']) || !$_SESSION['logueado']) {
    header("Location: ../../index.php");
    exit();
}



$db = connect_bbdd();
$user_id = $_SESSION['id_usuario'];

// Obtener personajes del usuario
$query = "SELECT c.id, c.name, c.image, COUNT(t.id_personaje) as cantidad 
          FROM tiradas t 
          JOIN cartas c ON t.id_personaje = c.id 
          WHERE t.id_usuario = ? 
          GROUP BY c.id";
$stmt = $db->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$personajes = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
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
        <section class="container-inventario">
            <?php if (!empty($personajes)): ?>
                <?php foreach ($personajes as $p): ?>
                    <article>
                        <div>
                            <img src="<?= htmlspecialchars($p['image']) ?>" alt="<?= htmlspecialchars($p['name']) ?>">
                        </div>
                        <h3><?= htmlspecialchars($p['name']) ?> (x<?= $p['cantidad'] ?>)</h3>
                    </article>
                <?php endforeach; ?>
            <?php else: ?>
                <p>¡Aún no tienes personajes!</p>
            <?php endif; ?>
        </section>
    </div>
</body>
</html>