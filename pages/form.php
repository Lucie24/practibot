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

            <div class="flexRow spaceBetween">

              <div>
                  <input type="checkbox" id="s1" name="s1">
                  <label for="s1">Maux de tête</label>
              </div>

              <div>
                  <input type="checkbox" id="s4" name="s4">
                  <label for="s4">Saignements</label>
              </div>

              <div>
                  <input type="checkbox" id="s7" name="s7">
                  <label for="s7">Toux</label>
              </div>

              <div>
                  <input type="checkbox" id="s10" name="s10">
                  <label for="s10">Fièvre</label>
              </div>
              
              <div>
                  <input type="checkbox" id="s13" name="s13">
                  <label for="s13">Malaise</label>
              </div>

            </div>

            <div class="flexRow spaceBetween">

              <div>
                  <input type="checkbox" id="s2" name="s2">
                  <label for="s2">Ecoulement nasal</label>
              </div>

              <div>
                  <input type="checkbox" id="s5" name="s5">
                  <label for="s5">Tachycardie</label>
              </div>

              <div>
                  <input type="checkbox" id="s8" name="s8">
                  <label for="s8">Douleur à la poitrine</label>
              </div>
                          <div>
                  <input type="checkbox" id="s11" name="s11">
                  <label for="s11">Difficulté respiratoire</label>
              </div>
                          <div>
                  <input type="checkbox" id="s14" name="s14">
                  <label for="s14">Symptôme 14</label>
              </div>

            </div>

            <div class="flexRow spaceBetween">

            <div>
                <input type="checkbox" id="s3" name="s3">
                <label for="s3">Symptôme 3</label>
            </div>

            <div>
                <input type="checkbox" id="s6" name="s6">
                <label for="s6">Symptôme 6</label>
            </div>

            <div>
                <input type="checkbox" id="s9" name="s9">
                <label for="s9">Symptôme 9</label>
            </div>
                        <div>
                <input type="checkbox" id="s12" name="s12">
                <label for="s12">Symptôme 12</label>
            </div>
                        <div>
                <input type="checkbox" id="s15" name="s15">
                <label for="s15">Symptôme 15</label>
            </div>

            </div>

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