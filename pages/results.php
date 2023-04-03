<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<?php
  include '../components/head.html';
?>

<body class="section-bg min-vh-100 d-flex flex-column flex-sm-column flex-md-column flex-lg-column flex-xl-column flex-nowrap flex-sm-nowrap flex-md-nowrap flex-lg-nowrap flex-xl-nowrap justify-content-between justify-content-sm-between justify-content-md-between justify-content-lg-between justify-content-xl-between">

<?php
    #Header
    include '../components/header_co.php';
?>

  <main class="marginThinBottom">  
          <div class="containerDiv">

              <div class="section-title">
                  <h2>Résultats</h2>
              </div>

              <p>Vous êtes peut-être atteint(e) de la maladie suivante : <strong><?php echo $_SESSION['maladie']; ?></strong></p>

              <p>Voulez vous communiquer vos résultats aux praticiens de la plateforme ?</p>

              <div class="flexRow spaceAround">
                      <a href="../components/insert_bdd.php" class="btn btnPrimary">Oui</a>
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