<?php
// Configuración de la base de datos
$host = "localhost";  // Cambia si es necesario
$dbname = "dokkan";   // Nombre de la base de datos
$username = "dokkan";   // Usuario de MySQL
$password = "123456";       // Contraseña de MySQL

// Conectar a MySQL
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// URL de la API
$url = "https://dragonball-api.com/api/characters?page=&limit=10";

// Obtener datos de la API
$response = file_get_contents($url);
$data = json_decode($response, true);

// Verificar si hay datos
if (!$data || !isset($data['items'])) {
    die("Error al obtener los datos de la API");
}

// Insertar cada personaje en la tabla `Cartas`
foreach ($data['items'] as $character) {
    $id = $character['id'];
    $name = $conn->real_escape_string($character['name']);
    $ki = $conn->real_escape_string($character['ki']);  // Es VARCHAR, no DOUBLE
    $maxKi = $conn->real_escape_string($character['maxKi']);
    $race = $conn->real_escape_string($character['race']);
    $gender = $conn->real_escape_string($character['gender']);
    $description = $conn->real_escape_string($character['description']);
    $image = $conn->real_escape_string($character['image']);
    $affiliation = $conn->real_escape_string($character['affiliation']);
    $deletedAt = isset($character['deletedAt']) ? "'".$character['deletedAt']."'" : "NULL";  // Puede ser NULL

    // Consulta SQL corregida para la tabla `Cartas`
    $sql = "INSERT INTO Cartas (id, name, ki, maxKi, race, gender, description, image, affiliation, deletedAt) 
            VALUES ('$id', '$name', '$ki', '$maxKi', '$race', '$gender', '$description', '$image', '$affiliation', $deletedAt)";

    // Imprimir la consulta para depuración
    echo "<pre>$sql</pre>";

    // Ejecutar la consulta y mostrar errores si los hay
    if (!$conn->query($sql)) {
        echo "Error al insertar el personaje: " . $conn->error . "<br>";
    }
}

echo "✅ Datos insertados correctamente.";

$conn->close();
?>
