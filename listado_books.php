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
    while ($row = $result->fetch_assoc()) {
        // Imprimir cada fila como una fila de la tabla HTML
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["autor"] . "</td>";
        echo "<td>" . $row["titulo"] . "</td>";
        echo "<td>" . $row["cantidad_ejemplares"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>0 resultados</td></tr>";
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>B O O K I E S</title>
    <!-- Agrega la referencia al archivo CSS de Bootstrap -->

</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Listado de Books</h1>

        <!-- Tabla para mostrar los libros -->
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Autor</th>
                    <th>Título</th>
                    <th>Cantidad de Ejemplares</th>
                </tr>
            </thead>
            <tbody>
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
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["autor"] . "</td><td>"
                            . $row["titulo"] . "</td><td>" . $row["cantidad_ejemplares"] . "</td></tr>";
                    }
                } else {
                    echo "0 resultados";
                }
                $conn->close();
                ?>

            </tbody>
        </table>

        <!-- Botón de regreso al index -->
        <div class="text-center">
            <a href="index.php" class="btn btn-primary">Regresar al Index</a>
        </div>
    </div>

    <!-- Agrega la referencia al archivo JavaScript de Bootstrap al final del body -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></script>
</body>

</html>