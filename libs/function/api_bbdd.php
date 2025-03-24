<?php
include_once 'connect_bbdd.php';

$conn = connect_bbdd();
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
