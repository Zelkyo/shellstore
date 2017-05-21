<?php 
$dsn = 'mysql:dbname=shellshop;host=localhost';
$user = 'root';
$password = '';

try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>