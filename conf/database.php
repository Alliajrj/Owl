<?php

$host = "localhost";
$db = "Owl";
$users = "root";
$pass = "";

try {
    $database = new PDO("mysql:host=$host;dbname=$db", $users, $pass);
} catch (PDOException $ex) {
    die("Erreur: " . $ex->getMessage());
}

session_start();
?>