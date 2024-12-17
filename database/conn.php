<?php
//arquivo para cessar o banco de dados
    $host = "localhost";
    $user = "root";
    $password = "root";
    $dbname = "php_study";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
