<?php
// bienvenido.php
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
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <h1>VirtualVault</h1>
        <nav>
            <ul>
                <li><a href="paginasSecundarias/EncontrarUnaTienda.html" target="_blank">Encontrar una Tienda</a></li>
                <li><a href="paginasSecundarias/iniciarsesion.html" target="_blank">Iniciar Sesión</a></li>
                <li><a href="paginasSecundarias/atencionalcliente.html" target="_blank">Atención al Cliente</a></li>
                <li><a href="paginasSecundarias/contacto.html" target="_blank">Contacto</a></li>
                <li>hola, <?php echo htmlspecialchars($_SESSION['usuario_nombre']); ?> </li>
                <li><a href="login_ab/logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
        
    </header>
    <main>
        <section class="tituloSelectores">
            <h2>Todo de virtualVault</h2>
        </section>
        <section class="image-row">
            <div class="image-container">
                <a href="juegos.php">
                    <img src="imagenes/prueba foto gorda.png" alt="Descripción imagen 1">  
                </a>
                <button onclick="location.href='juegos.php'" target="_blank">Todos los juegos</button>
            </div>
            <div class="image-container">
                <a href="juegos.php">
                    <img src="imagenes/prueba foto gorda.png" alt="Descripción imagen 1">
                    
                </a>
                <button onclick="location.href='login_ab/login.php'" target="_blank">Unete a la Virtual</button>
            </div>
            <div class="image-container">
                <a href="foro.php">
                    <img src="imagenes/prueba foto gorda.png" alt="Descripción imagen 3">
                    
                </a>
                <button onclick="location.href='foro.php'" target="_blank">Foro</button>
            </div>
        </section>

        <section class="quienes-somos">
            <h2>Quiénes Somos</h2>
            <p>
                Fundada en 2010, VirtualVault comenzó como una pequeña tienda en el corazón de Soria, dedicada a proporcionar componentes de hardware de alta calidad para entusiastas de la tecnología. A lo largo de los años, hemos crecido exponencialmente, ampliando nuestra gama de productos para incluir lo último en innovaciones tecnológicas y estableciendo asociaciones estratégicas con fabricantes líderes en la industria. A los pocos años ampliamos el mercado online ofreciendo un soporte para la compra de vidiojuegos a un precio mas reducido para favorecer la cartera de lo que mas nos importa, nuestros usuarios.
            </p>
            <p>
                Nuestro viaje ha sido impulsado por una pasión inquebrantable por la vanguardia tecnológica y un compromiso con la excelencia del servicio al cliente. En la última década, hemos evolucionado de una tienda local a un jugador global en el mercado de hardware, con una expansión significativa en nuestra presencia en línea y física.
            </p>
            <p>
                Mirando hacia el futuro, VirtualVault se dedica a ser pionero en el camino de la innovación tecnológica. Nos encontramos en la cúspide de explorar nuevas fronteras en inteligencia artificial y computación cuántica. Nuestra visión es no solo seguir el ritmo de la rápida evolución del sector, sino también definirlo, asegurando que nuestros clientes siempre estén un paso adelante.
            </p>
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
