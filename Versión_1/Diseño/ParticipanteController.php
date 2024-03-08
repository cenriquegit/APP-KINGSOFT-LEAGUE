<?php
require_once 'ParticipanteModel.php';

class ParticipanteController {
    private $model;

    public function __construct($db) {
        $this->model = new ParticipanteModel($db);
    }

    public function index() {
        $participantes = $this->model->getAllParticipantes();
        include 'ParticipanteView.php';
    }

    public function eliminar($id) {
        $this->model->deleteParticipante($id);
        header("Location: index.php");
    }

    public function editar($id) {
        // Implementa la lógica para editar un participante
    }
}

// Uso de ejemplo
$db = new PDO('mysql:host=localhost;dbname=nombre_de_tu_base_de_datos', 'usuario', 'contraseña');
$controller = new ParticipanteController($db);

// Manejo de las solicitudes
if (isset($_GET['accion'])) {
    $accion = $_GET['accion'];
    switch ($accion) {
        case 'eliminar':
            $id = $_GET['id'];
            $controller->eliminar($id);
            break;
        case 'editar':
            $id = $_GET['id'];
            $controller->editar($id);
            break;
        default:
            $controller->index();
            break;
    }
} else {
    $controller->index();
}
?>
