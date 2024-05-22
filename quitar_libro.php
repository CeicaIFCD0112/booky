<?php
// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $autor = $_POST["autor_quitar"];
    $titulo = $_POST["titulo_quitar"];

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

    // Consulta SQL para eliminar un libro
    $sql = "DELETE FROM books WHERE autor = ? AND titulo = ?";
    
    // Preparar la consulta
    $stmt = $conn->prepare($sql);

    // Vincular parámetros
    $stmt->bind_param("ss", $autor, $titulo);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            // Libro eliminado exitosamente, redireccionar al listado_books.php
            header("Location: listado_books.php");
            exit(); // Asegura que el script se detenga aquí para evitar cualquier salida adicional
        } else {
            echo "No se encontró ningún libro con ese autor y título.";
        }
    } else {
        echo "Error al eliminar el libro: " . $conn->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}
?>
