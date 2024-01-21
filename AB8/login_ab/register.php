<?php
session_start();
// Comprobamos si recibimos datos por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recogemos variables
    $nombre = isset($_REQUEST['nombre']) ? strtoupper($_REQUEST['nombre']) : null;
    $correo = isset($_REQUEST['correo']) ? $_REQUEST['correo'] : null;
    $contrasena = isset($_REQUEST['contrasena']) ? $_REQUEST['contrasena'] : null;

    // Datos de conexión a la base de datos
    $hostDB = '127.0.0.1';
    $nombreDB = 'web';
    $usuarioDB = 'root';
    $contrasenyaDB = '!Dragonioso2323';

    // Conecta con la base de datos
    $hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
    $miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);

    // Verifica si el correo o el nombre ya existe
    $consultaCorreo = $miPDO->prepare("SELECT * FROM usuarios WHERE correo = :correo");
    $consultaCorreo->execute(array('correo' => $correo));
    $consultaNombre = $miPDO->prepare("SELECT * FROM usuarios WHERE nombre = :nombre");
    $consultaNombre->execute(array('nombre' => $nombre));
    if ($consultaCorreo->rowCount() > 0) {
        // Usuario ya existe
        echo "<p>El correo ya está registrado. Por favor, intente con otro.</p>";
    } else if ($consultaNombre->rowCount() >0 ) {
        echo "<p> El nombre ya existe, intente con otro.<p>";
    }else {
        // Usuario  y nombre no existe, procede a insertar
        $miInsertUsuarios = $miPDO->prepare('INSERT INTO usuarios (correo, nombre, contrasena) VALUES (:correo, :nombre, :contrasena)');
        $miInsertUsuarios->execute(
            array(
                'correo' => $correo,
                'nombre' => $nombre,
                'contrasena' => $contrasena,
            )
        );

        // Redireccionamos a la página de login
        header('Location: login.php');
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - CRUD PHP</title>
    <link rel="stylesheet" type="text/css" href="../css/registro.css">
</head>
<body>
    <form action="" method="post">
        <p>Complete los siguientes campos para registrarse.</p>
        <p>
            <label for="nombre">Nombre</label>
            <input id="nombre" type="text" name="nombre" required>
        </p>
        <p>
            <label for="correo">Correo</label>
            <input id="correo" type="email" name="correo" required>
        </p>
        <p>
            <label for="contrasena">Contraseña</label>
            <input id="contrasena" type="password" name="contrasena" required>
        </p>
        <p>
            <input type="submit" value="Register">
        </p>
    </form>
</body>
</html>
