<?php
$hostname = "localhost";
$username = "bdd_practibot";
$password = "Root1234!";
$dbname = "practibot";

// Création d'une connexion PDO
$conn = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8mb4", $username, $password);
?>