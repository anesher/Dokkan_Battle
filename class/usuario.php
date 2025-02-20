<?php
class Usuario{
    private int $id_usuario;
    private string $nombre;
    private string $correo;
    private int $piedras;
    private string $nombre_usuario;
    private string $contrasena;
    private string $tipo;

    public function __construct($id_usuario, $nombre, $correo, $piedras, $nombre_usuario, $contrasena, $tipo){
        $this->id_usuario = $id_usuario;
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->piedras = $piedras;
        $this->nombre_usuario = $nombre_usuario;
        $this->contrasena = $contrasena;
        
        if($tipo != "admin" && $tipo != "user"){
            throw new Exception("Tipo de usuario no válido");
        }else if($tipo == "admin"){
            $this->tipo = "0";
        }else{
            $this->tipo = "1";
        }
    }

    // Getters
    public function getIdUsuario() {
        return $this->id_usuario;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getPiedras() {
        return $this->piedras;
    }

    public function getNombreUsuario() {
        return $this->nombre_usuario;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function getTipo() {
        return $this->tipo;
    }

    // Setters
    public function setIdUsuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function setPiedras($piedras) {
        $this->piedras = $piedras;
    }

    public function setNombreUsuario($nombre_usuario) {
        $this->nombre_usuario = $nombre_usuario;
    }

    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    
}
?>