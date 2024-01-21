<?php
// Comprobamso si recibimos datos por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recogemos variables
    $nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : null;
    $comentario = isset($_REQUEST['comentario']) ? $_REQUEST['comentario'] : null;

    // Variables
    $hostDB = '127.0.0.1';
    $nombreDB = 'web';
    $usuarioDB = 'root';
    $contrasenyaDB = '!Dragonioso2323';
    // Conecta con base de datos
    $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
    $miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
    // Prepara INSERT
    $miInsert = $miPDO->prepare('INSERT INTO foro (nombre, comentario) VALUES (:nombre, :comentario)'); 
    $miInsert->execute(
        array(
            'nombre' => $nombre,
            'comentario' => $comentario, 
        )
    );
    // Redireccionamos a Leer
    header('Location: ../foro.php');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear - CRUD PHP</title>
</head>
<body>
    <form action="" method="post">
        <p>
            <label for="nombre">nombre</label>
            <input id="nombre" type="text" name="nombre">
        </p>
        <p>
            <label for="comentario">comentario</label>
            <input id="comentario" type="text" name="comentario" >
        </p>
        <p>
            <input type="submit" value="Guardar">
        </p>
    </form>
</body>
</html>

</form>



<main>
            <table>
            <?php foreach ($miConsulta as $clave => $valor): ?> 
                <tr>
                <td><?= $valor['juego']; ?></td>
                <td><?= $valor['caracteristicas']; ?></td>
                <td><?= $valor['año_lanzamiento']; ?></td>
                <td>Precio <?= $valor['precio']; ?>$</td>
                <td><button onclick="agregarAlCarrito('<?=$valor['juego']; ?>' , <?=$valor['precio']; ?>)">Agregar al carrito</td>
                </tr>
            <?php endforeach; ?>
            </table>
        </main>



        
table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 10px; /* Espaciado entre filas */
}

table tr {
    background-color: #ffffff; /* Color de fondo de las filas */
    box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Sombra para el efecto de marco */
}

table th, table td {
    padding: 8px; /* Espaciado interno de las celdas */
    text-align: left; /* Alineación del texto */
    border: none; /* Sin bordes para las celdas */
}

/* Estilos para la cabecera de la tabla */
table thead th {
    background-color: #f5f5f5; /* Color de fondo para la cabecera */
}
