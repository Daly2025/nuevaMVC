<?php
namespace Formacom\Controllers;
use Formacom\Core\Controller;
use Formacom\Models\Tarea;
class TareasController extends Controller {

    // Mostrar todas las tareas
    public function index(...$params) {
        $tareas = Tarea::all();
        $this->view('index', ['tareas' => $tareas]);
    }

    // Mostrar formulario para nueva tarea
    public function nueva() {
        $this->view('nueva');
    }

    // Crear nueva tarea
    public function crear() {
        if(isset($_POST['titulo'])){
            $tarea = new Tarea();
            $tarea->titulo = $_POST['titulo'];
            $tarea->save();
        }
                header("Location: /nuevamvc");
    }

    // Editar tarea
    public function editar($id) {
        $tarea = Tarea::find($id);
        $this->view('editar', ['tarea' => $tarea]);
    }

    // Actualizar tarea
    public function actualizar() {
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];

        if ($id) {
            $tarea = Tarea::find($id);
            $tarea->titulo = $titulo;
            $tarea->save();
        }

        header(header: "Location: /nuevamvc");
    }

    // Eliminar tarea
    public function eliminar($id) {
        $tarea = Tarea::find($id);
        $tarea->delete();
        header("Location: /nuevamvc");
    }
}
?>

