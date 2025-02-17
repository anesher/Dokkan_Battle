<?php
    function connect_bbdd(){
        $host = "localhost";  // Cambia si es necesario
        $dbname = "dokkan";   // Nombre de la base de datos
        $username = "dokkan";   // Usuario de MySQL
        $password = "123456";  

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