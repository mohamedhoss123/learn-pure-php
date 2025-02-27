<?php

$dsn = 'mysql:host=db;dbname=your_database_name;charset=utf8mb4';
$username = 'your_database_user';
$password = 'your_database_password';
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>

