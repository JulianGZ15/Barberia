<?php
$host = 'db'; // En lugar de 'localhost'
$dbname = 'mydatabase';
$user = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    echo "Conexión exitosa!";
} catch (PDOException $e) {
    echo "Failed to connect with database! " . $e->getMessage();
}
