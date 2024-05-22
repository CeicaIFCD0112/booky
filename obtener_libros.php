<?php
// Conexión a la base de datos (reemplaza con tus propios datos)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booky";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los libros
$sql = "SELECT id, autor, titulo, cantidad_ejemplares FROM books";
$result = $conn->query($sql);

// Mostrar los libros en la tabla
if ($result->num_rows > 0) {
    // Salida de datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["autor"]. "</td><td>"
        . $row["titulo"]. "</td><td>" . $row["cantidad_ejemplares"]. "</td></tr>";
    }
} else {
    echo "0 resultados";
}
$conn->close();
?>
