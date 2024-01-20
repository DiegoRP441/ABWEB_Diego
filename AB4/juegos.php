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
                <li><a href="index.php">home</a></li>
                <li><a href="login_ab/logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
        
    </header>
    <div class=tabla_juegos>
        <aside>
                <h2>CARRITO DE LA COMPRA</h2>
                <div id="carrito">
                    <!-- aqui van los productos -->
                </div>
                <div id="totalCarrito">
                    total: 0$
                </div>
                <div class= botones_carro>
                    <button onclick="vaciarCarrito()">vaciar carrito</button>
                </div>
        </aside>
        <main>
            <table>
                <tr>
                    <th>Juego</th>
                    <th>caracteristicas</th>
                    <th>año de lanzamiento</th>
                    <th>precio ($)</th>
                    <td></td>
                    <td></td>
                </tr>
            <?php foreach ($miConsulta as $clave => $valor): ?> 
                <tr>
                <td><?= $valor['juego']; ?></td>
                <td><?= $valor['caracteristicas']; ?></td>
                <td><?= $valor['año_lanzamiento']; ?></td>
                <td><?= $valor['precio']; ?></td>
                <td><button onclick="agregarAlCarrito('<?=$valor['juego']; ?>' , <?=$valor['precio']; ?>)">Agregar al carrito</td>
                </tr>
            <?php endforeach; ?>
            </table>
        </main>
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
