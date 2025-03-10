<?php
require_once "../../libs/function/connect_bbdd.php";

class Usuario
{
    private ?int $id_usuario = null;
    private string $nombre;
    private string $correo;
    private int $piedras;
    private string $nombre_usuario;
    private string $contrasena;
    private string $tipo;

    public function __construct($nombre = null, $correo = null, $piedras = null, $nombre_usuario = null, $contrasena = null, $tipo = null) {
        if ($nombre !== null) {
            $this->nombre = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');
        }
        if ($correo !== null) {
            $this->correo = filter_var($correo, FILTER_VALIDATE_EMAIL);
            if (!$this->correo) {
                throw new Exception("Correo electrónico no válido");
            }
        }
        if ($piedras !== null) {
            $this->piedras = $piedras;
        }
        if ($nombre_usuario !== null) {
            $this->nombre_usuario = htmlspecialchars($nombre_usuario, ENT_QUOTES, 'UTF-8');
        }
        if ($contrasena !== null) {
            $this->contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
        }
        if ($tipo !== null) {
            if ($tipo != "admin" && $tipo != "user") {
                throw new Exception("Tipo de usuario no válido");
            } else if ($tipo == "admin") {
                $this->tipo = "0";
            } else {
                $this->tipo = "1";
            }
        }
    }

    // Getters
    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function getPiedras()
    {
        return $this->piedras;
    }

    public function getNombreUsuario()
    {
        return $this->nombre_usuario;
    }

    public function getContrasena()
    {
        return $this->contrasena;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    // Setters
    public function setIdUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function setPiedras($piedras)
    {
        $this->piedras = $piedras;
    }

    public function setNombreUsuario($nombre_usuario)
    {
        $this->nombre_usuario = $nombre_usuario;
    }

    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    // Función para registrar un usuario
    public function register() {
        $conn = connect_bbdd(); // Conectamos a la base de datos
    
        // Verificar si el correo ya existe
        $sql_check = "SELECT id_usuario FROM usuario WHERE correo = ?";
        $stmt_check = $conn->prepare($sql_check);
        $stmt_check->bind_param("s", $this->correo);
        $stmt_check->execute();
        $stmt_check->store_result();
    
        if ($stmt_check->num_rows > 0) {
            echo "El correo ya está registrado.";
            $stmt_check->close();
            $conn->close();
            return; // Detener la ejecución
        }
        $stmt_check->close();
    
        // Insertar el nuevo registro
        $sql = "INSERT INTO usuario (nombre, correo, piedra, nombre_usuario, contraseña, tipo) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssisss", $this->nombre, $this->correo, $this->piedras, $this->nombre_usuario, $this->contrasena, $this->tipo);
    
        if ($stmt->execute()) {
            echo "Te has registrado correctamente.";
        } else {
            echo "Error: " . $stmt->error;
        }
    
        $stmt->close();
        $conn->close();
    }


    // Función para iniciar sesión con el usuario y la contraseña
    public function login() {
        $conn = connect_bbdd();
        $consulta = "SELECT * FROM usuario WHERE nombre_usuario = ?";
        $stmt = $conn->prepare($consulta);
        $stmt->bind_param("s", $this->nombre_usuario);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $stmt->close();
        $conn->close();

        if ($resultado->num_rows == 1) {
            $fila = $resultado->fetch_assoc();
            if (password_verify($this->contrasena, $fila['contraseña'])) {
                return true;
            }
        }
        return false;
    }

    public function clicker($clicker){
        
    }
}
?>

