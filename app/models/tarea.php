<?php
namespace Formacom\Models;
use Illuminate\Database\Eloquent\Model;
class Tarea extends Model {

    protected $table = "tareas";
    protected $primaryKey = "id";
    public $timestamps = false; // Deshabilitar marcas de tiempo

}
?>

