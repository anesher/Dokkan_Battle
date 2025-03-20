<?php
include_once '../../libs/Render/Render_html.php';

$render = new RenderHTML();
$render->RenderHeader();
?>

<div class="containerPiedras">
    <div>
        <h1>¡Consigue las Piedras del Dragon!</h1>
    </div>

    <div class="imgPiedras">  
        <img src="../../img/conseguirPiedras.avif" alt="Conseguir Piedras" class="img-fluid">
    </div>
    <form action="" method="post">
    <div>  
        <button class="piedras" type="submit" name="clicker">Click aquí para conseguir piedras</button>
    </div>
    </form>
</div>

<?php
$render->RenderFooter();
?>