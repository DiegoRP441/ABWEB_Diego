<?php
// db.php
$hostDB = '127.0.0.1';
$nombreDB = 'web';
$usuarioDB = 'root';
$contrasenyaDB = '!Dragonioso2323';
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
try {
    $miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
    // Configura el manejo de errores a excepciones
    $miPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: No se pudo conectar. " . $e->getMessage());
}
?>
