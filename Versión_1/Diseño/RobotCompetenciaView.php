<?php
require_once 'RobotCompetenciaController.php';

$db = new PDO('mysql:host=localhost;dbname=datosks', 'root', '');
$controller = new RobotCompetenciaController($db);

// Ver todos los registros de robot_competencia
$robotCompetencias = $controller->index();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Competencias</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Robot Competencias</h1>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>ID Robot</th>
                    <th>ID Competencia</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($robotCompetencia = $robotCompetencias->fetch(PDO::FETCH_ASSOC)) : ?>
                    <tr>
                        <td><?php echo $robotCompetencia['id']; ?></td>
                        <td><?php echo $robotCompetencia['id_robot']; ?></td>
                        <td><?php echo $robotCompetencia['id_competencia']; ?></td>
                        <td>
                            <a href="ver_robot_competencia.php?id=<?php echo $robotCompetencia['id']; ?>" class="btn btn-info btn-sm">Ver</a>
                            <a href="editar_robot_competencia.php?id=<?php echo $robotCompetencia['id']; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="eliminar_robot_competencia.php?id=<?php echo $robotCompetencia['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
