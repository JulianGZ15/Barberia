<?php
$host = 'turntable.proxy.rlwy.net';
$port = '39974';
$dbname = 'railway';
$user = 'root';
$password = 'cwdoMUGHlyZErKtaOnELEWhTSAMJmtFc';

try {
    // Crear la conexión PDO
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $password);

    // Configuración de errores
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    echo "Conexión exitosa!";
} catch (PDOException $e) {
    echo "Failed to connect with database! Error: " . $e->getMessage();
}
