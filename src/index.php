<?php

$host = "mysql";
$dbname = "practica";
$user = "root";
$password = "123456";

echo "<h1>Hola Mundo desde PHP con Docker</h1>";

try {
    $conexion = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $user,
        $password
    );

    echo "<h2>✅ Conexión exitosa a MySQL</h2>";

} catch (PDOException $e) {
    echo "<h2>❌ Error de conexión:</h2>";
    echo $e->getMessage();
}

?>