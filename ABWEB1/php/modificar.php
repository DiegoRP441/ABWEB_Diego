<?php
// Variables
$hostDB = '127.0.0.1';
$nombreDB = 'web';
$usuarioDB = 'root';
$contrasenyaDB = '!Dragonioso2323';
$idnombre = isset($_REQUEST['idnombre']) ? $_REQUEST['idnombre'] : null;
$nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : null;
$comentario = isset($_REQUEST['comentario']) ? $_REQUEST['comentario'] : null;
// Conecta con base de datos
// Conecta con base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

// Comprobamos si recibimos datos por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Prepara UPDATE
    $miUpdate = $miPDO->prepare('UPDATE foro SET nombre = :nombre, comentario = :comentario WHERE idnombre = :idnombre');
    // Ejecuta UPDATE con los datos
    $miUpdate->execute([
        'idnombre' => $idnombre,
        'nombre' => $nombre,
        'comentario' => $comentario,
    ]);
    // Redireccionamos a Leer
    header('Location: ../foro.php');
} else {
    // Prepara SELECT
    $miConsulta = $miPDO->prepare('SELECT * FROM foro WHERE idnombre = ?;');
    // Ejecuta consulta
    $miConsulta->execute([ $idnombre]);
}
// Obtiene un resultado
$foro = $miConsulta->fetch();
// Verifica si la consulta fue exitosa
/* if ($epoca === false) {
    echo "Error: La época con el ID especificado no se encuentra en la base de datos.";
    exit;
} */

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear - CRUD PHP</title>
</head>
<body>
    <form method="post">
        <p>
            <label for="nombre">nombre</label>
            <input id="nombre" type="text" name="nombre" value="<?= $foro['nombre'] ?>">
        </p>
        <p>
            <label for="comentario">comentario</label>
            <input id="comentario" type="text" name="comentario" value="<?= $foro['comentario'] ?>">
        </p>
        <p>
            <input type="hidden" name="idnombre" value="<?= $idnombre ?>">
            <input type="submit" value="Modificar">
        </p>
    </form>
</body>
</html>
