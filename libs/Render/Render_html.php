<?php
session_start(); // Iniciar sesión

class RenderHTML
{
    private bool $isLogged;
    private int $piedras;

    public function __construct()
    {
        // Obtener valores de sesión o asignar valores por defecto
        $this->isLogged = isset($_SESSION['user_id']);
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
        if ($this->isLogged) {
            echo '
                <header class="headerIniciado">
                    <div class="logo-inicio">
                        <a href=""><img src="./img/logo.webp" alt="Logo"></a>
                    </div>

                    <div class="botones">
                        <input type="number" readonly value="'.$this->getPiedras() /*PROVISIONAL*/.'" id="piedras" name="piedras">
                        <button class="conseguirPiedras"><a href="./views/users/conseguirPiedras.php">CONSEGUIR PIEDRAS</a></button>
                    </div>

                    <div class="botones2">
                        <button class="perfil"><a href="./views/users/perfil.php">PERFIL</a></button>
                         <button class="inventario"><a href="./views/users/inventario.php">INVENTARIO</a></button>
                        <button class="gachapon"><a href="./views/users/gachapon.php">GACHAPON</a></button>
                    </div>
            
                </header>';
        } else {
            echo '<header class="headerNoIniciado">

                    <button class="registro"><a href="./views/users/registro.php">REGISTRARSE</a></buttons>

                    <button class="login"><a href="./views/users/login.php">LOGIN</a></button>

                </header>';
        }
    }
}
?>
