<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login_ab/login.php");
    exit;
}
?>
<?php
// Variables
$hostDB = '127.0.0.1';
$nombreDB = 'web'; //es el nombre de la base de datos a la cual me estor conectando.
$usuarioDB = 'root';
$contrasenyaDB = '!Dragonioso2323';
// Conecta con base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;"; //aqui me conecta a la base de datos con la que quiero trabajar
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
// Prepara SELECT
$miConsulta = $miPDO->prepare('SELECT * FROM productos;');

// Ejecuta consulta
$miConsulta->execute();


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>virtualVault</title>
    <link rel="stylesheet" type="text/css" href="css/juegos.css">
    <link rel="stylesheet" type="text/css" href="css/headFoot.css">
    
</head>
<body>
    <header>
        <h1>VirtualVault</h1>
        <nav>
            <ul>
                <li><a href="paginasSecundarias/EncontrarUnaTienda.html" target="_blank">Encontrar una Tienda</a></li>
                <li><a href="paginasSecundarias/contacto.html" target="_blank">Contacto</a></li>
                <li><a href="index.php">home</a></li>
                <li><a><?php echo htmlspecialchars($_SESSION['usuario_nombre']); ?></a>
                <li><a href="login_ab/logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
        
    </header>
    <div class=contenido_principal>
        <div class=carrito-contenedor></div>
            <button id="botonCarrito">Carrito</button>
            <aside id="carritoDeCompras" class="oculto">
                    <h2>CARRITO DE LA COMPRA</h2>
                    <div id="carrito">
                        <!-- aqui van los productos -->
                    </div>
                    <div id="totalCarrito">
                        Total: 0$
                    </div>
                    <div class= botones_carro>
                        <button onclick="vaciarCarrito()">vaciar carrito</button>
                    </div>
                    <a href="paginasSecundarias/compra.php">finalice su compra aqui</a>
            </aside>
    <main>
    <div class="card-container">
        <?php foreach ($miConsulta as $clave => $valor): ?> 
            <div class="card">
                <div class="card-image" style="background-image: url('<?= $valor['foto']; ?>');"></div>
                <div class="card-content">
                <h3><?= $valor['juego']; ?></h3>
                <p>Precio: <?= $valor['precio']; ?>$</p>
                <div class="card-hover-content">
                    <p><?= $valor['caracteristicas']; ?></p>
                    <p>Año de Lanzamiento: <?= $valor['año_lanzamiento']; ?></p>
                </div>
                <button onclick="agregarAlCarrito('<?=$valor['juego']; ?>', <?=$valor['precio']; ?>)">Agregar al carrito</button>
                <?php if ($_SESSION['usuario_nombre'] ===  "ADMIN"): ?>
                    <a class="button" href="php/mod_juegos.php?idnombre=<?= "ADMIN" ?>">Modificar</a>
                    <a class="button" href="php/borrar_juegos.php?idnombre=<?= "ADMIN" ?>">Borrar</a>
                    <a class="button" href="php/crear_juego.php?idnombre=<?= "ADMIN" ?>">crear</a>
                <?php endif; ?>
            </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>
    </div>
    <div id="mensaje-confirmacion" class="mensaje-oculto">
    <!-- El mensaje de confirmación aparecerá aquí -->
    </div>
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
                <a href="ruta-a-contacto.html">Contacto</a>
            </div>
        </div>
    </footer>
    <script src="carrito.js"></script>
</body>
</html>
