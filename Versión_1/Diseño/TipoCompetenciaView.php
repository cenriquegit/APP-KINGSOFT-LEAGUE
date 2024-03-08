<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Competencia</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Tipos de Competencia</h1>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if(isset($tipos_competencia)) {
                    foreach ($tipos_competencia as $tipo_competencia): ?>
                        <tr>
                            <td><?php echo $tipo_competencia['id']; ?></td>
                            <td><?php echo $tipo_competencia['nombre']; ?></td>
                        </tr>
                    <?php endforeach;
                } else {
                    echo "<tr><td colspan='2'>No hay tipos de competencia registrados.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Enlace a Bootstrap JS y jQuery (opcional, si necesitas componentes interactivos) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
