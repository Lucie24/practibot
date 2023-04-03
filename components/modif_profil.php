<?php

session_start();

include "../components/verif_conn.php";
include "../components/bdd_connexion.php";

// Récupération des données 
if (!empty($_SESSION['nom'])) {
    $newNom = htmlspecialchars($_SESSION['nom']);

    // Requête pour modifier les données personnelles
    $stmt = $conn->prepare("UPDATE praticien SET nom = '$newNom' WHERE id_praticien = :id_praticien");
    $stmt->bindParam(':id_praticien', $_SESSION['id_praticien']);

    $stmt->execute();
}

if (!empty($_SESSION['prenom'])) {
    $newPrenom = htmlspecialchars($_SESSION['prenom']);

    // Requête pour modifier les données personnelles
    $stmt = $conn->prepare("UPDATE praticien SET prenom = '$newPrenom' WHERE id_praticien = :id_praticien");
    $stmt->bindParam(':id_praticien', $_SESSION['id_praticien']);

    $stmt->execute();
}

if (!empty($_SESSION['email'])) {
    $newEmail = htmlspecialchars($_SESSION['email']);

    // Requête pour modifier les données personnelles
    $stmt = $conn->prepare("UPDATE praticien SET email = '$newEmail' WHERE id_praticien = :id_praticien");
    $stmt->bindParam(':id_praticien', $_SESSION['id_praticien']);

    $stmt->execute();
}

if (!empty($_SESSION['id'])) {
    $newid = htmlspecialchars($_SESSION['id']);

    // Requête pour modifier les données personnelles
    $stmt = $conn->prepare("UPDATE praticien SET mdp = '$newid' WHERE id_praticien = :id_praticien");
    $stmt->bindParam(':id_praticien', $_SESSION['id_praticien']);

    $stmt->execute();
}

if (!empty($_SESSION['specialite'])) {
    $newSpecialite = htmlspecialchars($_SESSION['specialite']);

    // Requête pour modifier les données personnelles
    $stmt = $conn->prepare("UPDATE praticien SET specialite = '$newSpecialite' WHERE id_praticien = :id_praticien");
    $stmt->bindParam(':id_praticien', $_SESSION['id_praticien']);

    $stmt->execute();
}

if (!empty($_SESSION['departement'])) {
    $newDepartement = htmlspecialchars($_SESSION['departement']);

    // Requête pour modifier les données personnelles
    $stmt = $conn->prepare("UPDATE praticien SET departement = '$newDepartement' WHERE id_praticien = :id_praticien");
    $stmt->bindParam(':id_praticien', $_SESSION['id_praticien']);

    $stmt->execute();
}

if (!empty($_SESSION['mdp'])) {
    $newMdp = password_hash($_SESSION['mdp'], PASSWORD_DEFAULT);

    // Requête pour modifier les données personnelles
    $stmt = $conn->prepare("UPDATE praticien SET mdp = '$newMdp' WHERE id_praticien = :id_praticien");
    $stmt->bindParam(':id_praticien', $_SESSION['id_praticien']);

    $stmt->execute();
}

header('Location: ../pages/profil.php');
?>