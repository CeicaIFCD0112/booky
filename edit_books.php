<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrar Libros</title>
    <!-- Agrega la referencia al archivo CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" rel="stylesheet">
    <style>
        .form-container {
            max-width: 500px;
            margin: auto;
        }
        .btn-submit {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Administrar Libros</h1>
        
        <!-- Formulario para añadir libros -->
        <div class="form-container mb-4">
            <h3 class="mb-3">Añadir Libro</h3>
            <form action="agregar_libro.php" method="POST">
                <div class="form-group">
                    <label for="autor">Autor:</label>
                    <input type="text" class="form-control" id="autor" name="autor" required>
                </div>
                <div class="form-group">
                    <label for="titulo">Título:</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                </div>
                <div class="form-group">
                    <label for="cantidad">Cantidad de Ejemplares:</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" required>
                </div>
                <button type="submit" class="btn btn-primary btn-submit">Añadir Libro</button>
            </form>
        </div>
        
        <!-- Formulario para quitar libros -->
        <div class="form-container">
            <h3 class="mb-3">Quitar Libro</h3>
            <form action="quitar_libro.php" method="POST">
                <div class="form-group">
                    <label for="autor_quitar">Autor:</label>
                    <input type="text" class="form-control" id="autor_quitar" name="autor_quitar" required>
                </div>
                <div class="form-group">
                    <label for="titulo_quitar">Título:</label>
                    <input type="text" class="form-control" id="titulo_quitar" name="titulo_quitar" required>
                </div>
                <button type="submit" class="btn btn-danger btn-submit">Quitar Libro</button>
            </form>
        </div>
        
        <!-- Botón de regreso al index -->
        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-secondary">Regresar al Index</a>
        </div>
    </div>
    
    <!-- Agrega la referencia al archivo JavaScript de Bootstrap al final del body -->
    <script src="<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>"></script>
</body>
</html>
