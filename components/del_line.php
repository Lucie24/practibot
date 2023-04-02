<?php
$id = $_GET['id'];

include "../components/bdd_connexion.php";

$stmt = $conn->prepare("SELECT * FROM patient WHERE id_patient = :id_patient");
$stmt->bindParam(':id_patient', $id);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    $stmt = $conn->prepare("DELETE FROM patient WHERE id_patient = :id_patient");
    $stmt->bindParam(':id_patient', $id);
    $stmt->execute();

    header('Location: ../pages/praticien.php');
    exit();
}
?>