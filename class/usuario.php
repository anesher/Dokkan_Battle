<?php
require_once "../../libs/function/connect_bbdd.php";
//require_once "../../libs/Render/Render_html.php";
class Usuario
{
    private $db;
    private ?int $id_usuario = null;
    private string $nombre;
    private string $correo;
    private int $piedras;
    private string $nombre_usuario;
    private string $contrasena;
    private string $tipo;

    public function __construct($db=null,$nombre = null, $correo = null, $piedras = 0, $nombre_usuario = null, $contrasena = null, $tipo = null) {
        if($db !== null){
            $this->db = $db;
        }
        if ($nombre !== null) {
            $this->nombre = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8');
        }
        if ($correo !== null) {
            $this->correo = filter_var($correo, FILTER_VALIDATE_EMAIL);
            if (!$this->correo) {
                throw new Exception("Correo electrónico no válido");
            }
        }
        $this->piedras = $piedras;
        if ($nombre_usuario !== null) {
            $this->nombre_usuario = htmlspecialchars($nombre_usuario, ENT_QUOTES, 'UTF-8');
        }
        if ($contrasena !== null) {
            $this->contrasena = password_hash($contrasena, PASSWORD_DEFAULT);
        }
        if ($tipo !== null) {
            if ($tipo != "admin" && $tipo != "user") {
                throw new Exception("Tipo de usuario no válido");
            }
            $this->tipo = ($tipo == "admin") ? "0" : "1";
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
        // para conseguir las piedras que tiene el usuario
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
        session_start();
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
                $_SESSION['user_id'] = $fila['id_usuario'];
                $_SESSION['isLogged'] = true;
                return true;
            }
        }
        return false;
        
    }

    // Función para conseguir una piedra
    public function conseguirPiedra() {
        $query = "SELECT piedras FROM usuario WHERE nombre_usuario = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$this->nombre_usuario]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $piedrasActuales = $result ? $result['piedras'] : 0;
        
        $nuevasPiedras = $piedrasActuales + 1;
        
        $updateQuery = "UPDATE usuario SET piedras = ? WHERE nombre_usuario = ?";
        $updateStmt = $this->db->prepare($updateQuery);
        $updateStmt->execute([$nuevasPiedras, $this->nombre_usuario]);
        
        $_SESSION['piedras'] = $nuevasPiedras;
        
        return $nuevasPiedras;
    }
    // funcion para conseguir un personaje aleatorio 
    public function obtenerPersonajeAleatorio() {
        $query = "SELECT id, name, ki, maxKi, race, gender, description, image, affiliation FROM cartas WHERE deletedAt IS NULL ORDER BY RAND() LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $personaje = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $personaje ?: null;
    }
}

?>

