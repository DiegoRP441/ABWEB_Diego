
<?php
// Variables
$hostDB = '127.0.0.1';
$nombreDB = 'web';
$usuarioDB = 'root';
$contrasenyaDB = '!Dragonioso2323';
// Conecta con base de datos
$hostPDO = "mysql:host=$hostDB;dbname=$nombreDB;";
$miPDO = new PDO($hostPDO, $usuarioDB, $contrasenyaDB);
// Obtiene idnombre del libro a borrar
$idnombre = isset($_REQUEST['idnombre']) ? $_REQUEST['idnombre'] : null;
// Prepara DELETE
$miConsulta = $miPDO->prepare('DELETE FROM foro WHERE idnombre = ?');
// Ejecuta la sentencia SQL

$miConsulta->execute([ $idnombre]);
// Redireccionamos al PHP con todos los datos
header('Location: ../foro.php');
?>