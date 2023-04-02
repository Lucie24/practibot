<?php
  session_start();
  include "../components/bdd_connexion.php";
  include "../components/form_verifs.php";

  #Récupération du formulaire choisi
  $form = $_GET['form'];
?>

<!DOCTYPE html>
<html lang="fr">

<?php
  include '../components/head.html';
?>

<body class="section-bg min-vh-100 d-flex flex-column flex-sm-column flex-md-column flex-lg-column flex-xl-column flex-nowrap flex-sm-nowrap flex-md-nowrap flex-lg-nowrap flex-xl-nowrap justify-content-between justify-content-sm-between justify-content-md-between justify-content-lg-between justify-content-xl-between">

<?php
  include '../components/header.php';
?>

  <main id="appointment" class="marginFatTop marginThinBottom">
    <div class="container">

      <div class="section-title">
        <h2>Se diagnostiquer</h2>
        <p>
          Ce formulaire permet de vous faire un auto-diagnostique de vos problèmes médicaux. Ces résultats seront
          communiqués à votre médecin traitant qui vous attribuera un rendez-vous en fonction de vos symptômes
        </p>
      </div>

      <?php
        include '../components/formulaire.php';
      ?>

    </div>
  </main>

  <?php
      include "../components/footer.html";
      include "../components/buttonTop.html";
      include "../components/scripts.html";
  ?>

</body>

</html>