<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login_ab/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>virtualVault</title>
    <link rel="stylesheet" type="text/css" href="css/headFoot.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <header>
        <h1>VirtualVault</h1>
        <nav>
            <ul>
                <li><a href="paginasSecundarias/EncontrarUnaTienda.html" target="_blank">Encontrar una Tienda</a></li>
                <li><a href="paginasSecundarias/contacto.html" target="_blank">Contacto</a></li>
                <li><a href="paginasSecundarias/quines_somos.html" target="_blank">Quines somos</a></li>
                <li><a href="login_ab/logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
        
    </header>
    <main>
        <section class="tituloSelectores">
            <h2>Bienvenido/a <?php echo htmlspecialchars($_SESSION['usuario_nombre']); ?></h2>
        </section>
        <section class="image-row">
            <div class="image-container">
                <a href="juegos.php">
                    <img src="imagenes/prueba foto gorda.png" alt="Descripción imagen 1">  
                </a>
                <button onclick="location.href='juegos.php'" target="_blank">Todos los juegos</button>
            </div>
            <div class="image-container">
                <a href="paginasSecundarias/filosofia.html">
                    <img src="imagenes/filosofia.png" alt="Descripción imagen 1">
                    
                </a>
                <button onclick="location.href='paginasSecundarias/filosofia.html'" target="_blank">Conoce nuestra filosofia</button>
            </div>
            <div class="image-container">
                <a href="foro.php">
                    <img src="imagenes/foro.png" alt="Descripción imagen 3">
                    
                </a>
                <button onclick="location.href='foro.php'" target="_blank">Foro</button>
            </div>
        </section>
    </main>
    <footer class="site-footer">
        <div class="footer-content">
            <div class="footer-photo">
                <img src="imagenes/asistentefinal.png" alt="Descripción de la foto">
            </div>
            <div class="footer-links">
                <a href="ruta-a-soporte.html">Soporte</a>
                <a href="ruta-a-faq.html">Preguntas Frecuentes</a>
                <a href="ruta-a-terminos.html">Términos de Servicio</a>
                <a href="ruta-a-privacidad.html">Política de Privacidad</a>
                <a href="contacto.html">Contacto</a>
            </div>
        </div>
    </footer>

</body>
</html>
