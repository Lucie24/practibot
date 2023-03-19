<?php
session_destroy();
?>

<!DOCTYPE html>
<html lang="fr">

<?php
  include '../components/head.html';
?>

<body class="section-bg">

<?php
  include '../components/header.php';
?>

<main class="marginFatTop backgroundCover">  
        <div class="containerDiv">

            <div class="section-title">
                <h2>Résultats</h2>
            </div>

            <p>Voici le résultat de ce test : <strong>Maladie X</strong></p>

            <p>Voulez vous communiquer vos résultats aux praticiens de la plateforme ?</p>

            <div class="flexRow spaceAround">
                    <a href="../index.php" class="btn btnPrimary">Oui</a>
                    <a href="../index.php" class="btn btnPrimary">Non</a>
            </div>
        </div>
</main>

    <?php
      include "../components/footer.html";
      include "../components/buttonTop.html";
      include "../components/scripts.html";
    ?>

</body>

</html>