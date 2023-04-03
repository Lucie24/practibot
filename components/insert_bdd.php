<?php
session_start();

include "../components/bdd_connexion.php";

// Préparation de la requête préparée
$sql = "INSERT INTO patient (nom, prenom, age, mail, tel, departement, medecin_traitant, maladie, symptome, messageprat) VALUES (:nom, :prenom, :age, :mail, :tel, :departement, :medecin_traitant, :maladie, :symptome, :messageprat)";
$stmt = $conn->prepare($sql);

// Liaison des variables avec les paramètres de la requête préparée
$stmt->bindParam(':nom', $_SESSION['surname']);
$stmt->bindParam(':prenom', $_SESSION['name']);
$stmt->bindParam(':age', $_SESSION['age']);
$stmt->bindParam(':mail', $_SESSION['email']);
$stmt->bindParam(':tel', $_SESSION['phone']);
$stmt->bindParam(':departement', $_SESSION['departement']);
$stmt->bindParam(':medecin_traitant', $_SESSION['doctor']);
$stmt->bindParam(':maladie', $_SESSION['maladie']);
$stmt->bindParam(':symptome', $_SESSION['symptome']);
$stmt->bindParam(':messageprat', $_SESSION['message']);

// Exécution de la requête préparée
$stmt->execute();

header('Location: ../index.php');

?>