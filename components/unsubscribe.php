<?php
session_start();

include "../components/bdd_connexion.php";

$stmt = $conn->prepare("SELECT * FROM praticien WHERE id_praticien = :id_praticien");
$stmt->bindParam(':id_praticien', $_SESSION['id_praticien']);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    $stmt = $conn->prepare("DELETE FROM praticien WHERE id_praticien = :id_praticien");
    $stmt->bindParam(':id_praticien', $_SESSION['id_praticien']);
    $stmt->execute();

    session_destroy();

    header('Location: ../index.php');
    exit();
}
?>