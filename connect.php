<?php
$host = 'mysql://root:cwdoMUGHlyZErKtaOnELEWhTSAMJmtFc@turntable.proxy.rlwy.net:39974/barberia'; // En lugar de 'localhost'


try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    echo "Conexión exitosa!";
} catch (PDOException $e) {
    echo "Failed to connect with database! " . $e->getMessage();
}
