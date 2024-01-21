<?php
session_start();
// Comprobamso si recibimos datos por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recogemos variables
    $nombre = $_SESSION['usuario_nombre'];
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
        <p><?php echo htmlspecialchars($_SESSION['usuario_nombre']); ?> comente lo que quiera a continuacion.</p>
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
