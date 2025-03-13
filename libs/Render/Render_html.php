<?php
session_start(); // Iniciar sesión

class RenderHTML
{
    private bool $isLogged;
    private int $piedras;

    public function __construct()
    {
        // Obtener valores de sesión o asignar valores por defecto
        $this->isLogged = $_SESSION['isLogged'] ?? false;
        $this->piedras = $_SESSION['piedras'] ?? 0;
    }

    // Métodos para establecer y obtener el estado de inicio de sesión
    public function setLogged(bool $isLogged)
    {
        $this->isLogged = $isLogged;
        $_SESSION['isLogged'] = $isLogged;
    }
    public function getLogged(): bool
    {
        return $this->isLogged;
    }

    // Métodos para establecer y obtener el número de piedras
    public function setPiedras(int $piedras)
    {
        $this->piedras = $piedras;
        $_SESSION['piedras'] = $piedras;
    }
    public function getPiedras(): int
    {
        return $this->piedras;
    }

    // Renderizar el header
    public function RenderHeader()
    {
        echo ' 
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Dokkan Battle</title>
            <link rel="stylesheet" type="text/css" href="../../css/style.css">
        </head>
        <body>
            <video autoplay loop muted playsinline class="background-video">
                <source src="../../videos/Dragon Ball Sparking Zero Opening Intro Animation 4K.mp4">
            </video>
            <div class="main">
                <header class="headerIniciado">
                    <div class="logo-inicio">
                        <a href="../../index.php"><img src="../../img/logo.webp" alt="Logo"></a>
                    </div>
                    <div class="botones">';

        if ($this->isLogged) {
            echo ' 
                        <input type="number" readonly value="' . $this->piedras . '" id="piedras" name="piedras">
                        <button class="conseguirPiedras"><a href="./conseguirPiedras.php">CONSEGUIR PIEDRAS</a></button>
                        <div class="botones2">
                            <button class="perfil"><a href="./perfil.php">PERFIL</a></button>
                            <button class="inventario"><a href="./inventario.php">INVENTARIO</a></button>
                            <button class="gachapon"><a href="./gachapon.php">GACHAPÓN</a></button>
                        </div>';
        } else {
            echo ' 
                        <button class="registro"><a href="./registro.php">REGISTRARSE</a></button>
                        <button class="login"><a href="./login.php">LOGIN</a></button>';
        }

        echo ' 
                    </div>
                </header>';
    }

    // Renderizar el footer
    public function RenderFooter()
    {
        echo ' 
            </div>
        </body>
        </html>';
    }
}
?>
