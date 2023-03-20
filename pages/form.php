<!DOCTYPE html>
<html lang="fr">

<?php
  include '../components/head.html';
?>

<body class="section-bg">

<?php
  include '../components/header.php';
?>

<!-- ======= Appointment Section ======= -->
    <main id="appointment" class="marginFatTop marginThinBottom appointment">
      <div class="container">

        <div class="section-title">
          <h2>Se diagnostiquer</h2>
          <p>
              Ce formulaire permet de vous faire un auto-diagnostique de vos problèmes médicaux. Ces résultats seront
              communiqués à votre médecin traitant qui vous attribuera un rendez-vous en fonction de vos symptômes
          </p>
        </div>

        <form action="results.php" method="post" role="form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="surname" placeholder="Nom">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Prénom">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email">
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Numéro de téléphone">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">

              <?php
              include "../components/liste_dep.html";
              ?>

              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select">
                  <option value="">Qui est votre médecin traitant ?</option>
                <option value="Doctor 1">Docteur 1</option>
                <option value="Doctor 2">Docteur 2</option>
                <option value="Doctor 3">Docteur 3</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>

            <p class="marginThinTop">Symptômes :</p>

          <?php
          include "../components/symptomes.php";
          ?>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Plus de détails (Optionnel)"></textarea>
            <div class="validate"></div>
          </div>
          <div class="text-center"><button type="submit" class="btn btnPrimary marginThinTop">Se diagnostiquer</button></div>
        </form>

      </div>
    </main><!-- End Appointment Section -->

    <?php
        include "../components/footer.html";
        include "../components/buttonTop.html";
        include "../components/scripts.html";
    ?>

</body>

</html>