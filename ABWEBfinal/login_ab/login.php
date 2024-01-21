<?php
// login.php
session_start();
require 'db.php'; //archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    if (!empty($correo) && !empty($contrasena)) {
        // Prepara la sentencia SQL para evitar inyecciones SQL
        $stmt = $miPDO->prepare("SELECT * FROM usuarios WHERE correo = :correo");
        $stmt->bindParam(':correo', $correo);

        $stmt->execute();
        
        if ($stmt->rowCount() == 1) {
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($contrasena == $usuario['contrasena']) {
                
                $_SESSION['usuario_id'] = $usuario['codigo'];
                $_SESSION['usuario_nombre'] = $usuario['nombre'];
                // Redirige al usuario a La pagina principal
                header("location: ../index.php");
                exit;
            } else {
                $error_login = "La contraseña ingresada no es válida.";
            }
        } else {
            $error_login = "No se encontró cuenta con ese correo.";
        }
    } else {
        $error_login = "Por favor ingrese correo y contraseña.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
    <h2>Iniciar Sesión </h2>
    <form action="login.php" method="post">
        Correo: <input type="text" name="correo"><br>
        Contraseña: <input type="password" name="contrasena"><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
    <div class="botonRegistro">
        <button onclick="window.location.href='register.php'">Registrarse</button>
    </div>
    <?php if (!empty($error_login)) echo $error_login; ?>
</body>
</html>
