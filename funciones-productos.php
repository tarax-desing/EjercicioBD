<?php
require 'basededatos.php'

// Conexión a la base de datos
$servername = "localhost/ejercicioBD";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tienda_informatica";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL
$sql = "SELECT nombre FROM producto";
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Mostrar los datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "Producto: " . $row["nombre"] . "<br>";
    }
} else {
    echo "0 resultados";
}

// Cerrar conexión
$conn->close();
?>