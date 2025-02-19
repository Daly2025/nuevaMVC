<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <h1> WEB DE TAREAS</h1>
    <a href="/nuevamvc/tareas/nueva">NUEVA TAREA</a>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>TITULO</th>
                <th>ESTADO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['tareas'] as $tarea): ?>
                <tr>
                    <td><?= $tarea->id ?></td>
                    <td><?= $tarea->titulo ?></td>
                    <td><?= $tarea->estado ?></td>
                    <td>
                        <a href="/nuevamvc/tareas/editar/<?= $tarea->id ?>">EDITAR</a>
                        <a href="/nuevamvc/tareas/eliminar/<?= $tarea->id ?>">ELIMINAR</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
</body>
</html>
