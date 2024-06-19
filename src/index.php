<?php
$servername = getenv('MYSQL_HOST') ? : 'db';
$username = getenv('MYSQL_USER') ? : 'testuser';
$password = getenv('MYSQL_PASSWORD') ? : 'testpassword';
$dbname = getenv('MYSQL_DATABASE') ? : 'testdb';

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "<center>";
echo "<h3 style = 'color: green'>Conexión exitosa a la base de datos</h3>";
echo "<h1>Saul Santana 2022-2097</h1>";
echo "</center>";

?>
