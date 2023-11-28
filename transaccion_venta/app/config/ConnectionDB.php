<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$database = "terceriza";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES utf8");
    echo "Coneccion HEcha";
} catch (PDOException $e) {
    die("Conexión fallida: " . $e->getMessage());
}
