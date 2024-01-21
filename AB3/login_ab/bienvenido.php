<?php
// bienvenido.php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

// Aquí puedes obtener más información del usuario si es necesario
// ...

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario_nombre']); ?></h1>
    <!-- Aquí puedes añadir más contenido para el usuario -->
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>
