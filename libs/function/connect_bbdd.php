<?php
    function connect_bbdd(){
        $host = "localhost";
        $dbname = "dokkan";
        $username = "dokkan";
        $password = "123456";

        // Conectar a MySQL
        $conn = new mysqli($host, $username, $password, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
            die("Error de conexión: " . $conn->connect_error);
        }else{
            return $conn;
        }
    }
?>