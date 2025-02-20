<?php
    function connect_bbdd(){
        // Incluir archivo de configuración
        include 'config.php';

        // Conectar a MySQL
        $mysqli = new mysqli($host, $username, $password, $dbname);

        // Verificar conexión
        if ($mysqli->connect_error) {
            die("Error de conexión: " . $mysqli->connect_error);
        }else{
            return $mysqli;
        }
    }
?>