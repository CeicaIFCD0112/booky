<?php
// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $autor = $_POST["autor"];
    $titulo = $_POST["titulo"];
    $cantidad = $_POST["cantidad"];

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

    // Consulta SQL para insertar un nuevo libro
    $sql = "INSERT INTO books (autor, titulo, cantidad_ejemplares) VALUES (?, ?, ?)";
    
    // Preparar la consulta
    $stmt = $conn->prepare($sql);

    // Vincular parámetros
    $stmt->bind_param("ssi", $autor, $titulo, $cantidad);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Libro añadido exitosamente, redireccionar al listado_books.php
        header("Location: listado_books.php");
        exit(); // Asegura que el script se detenga aquí para evitar cualquier salida adicional
    } else {
        echo "Error al añadir el libro: " . $conn->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}
?>
