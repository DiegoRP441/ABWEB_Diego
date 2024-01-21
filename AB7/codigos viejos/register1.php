<?php
session_start();
// Comprobamos si recibimos datos por POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recogemos variables
    $nombre = isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : null;
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

    // Verifica si el correo ya existe
    $consulta = $miPDO->prepare("SELECT * FROM usuarios WHERE correo = :correo");
    $consulta->execute(array('correo' => $correo));
    if ($consulta->rowCount() > 0) {
        // Usuario ya existe
        echo "<p>El correo ya está registrado. Por favor, intente con otro.</p>";
    } else {
        // Usuario no existe, procede a insertar
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
            <input


```

