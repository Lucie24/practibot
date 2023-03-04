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
    <main id="appointment" class="marginFatTop marginThinBottom appointment backgroundCover">
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
              <select name="department" id="department" class="form-select">
                <option value="">Sélectionner votre département</option>
                <option value="Department 1">Department 1</option>
                <option value="Department 2">Department 2</option>
                <option value="Department 3">Department 3</option>
              </select>
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
                <label for="scales">Symptôme 1</label>
            </div>

            <div>
                <input type="checkbox" id="s4" name="s4">
                <label for="horns">Symptôme 4</label>
            </div>

            <div>
                <input type="checkbox" id="s7" name="s7">
                <label for="horns">Symptôme 7</label>
            </div>
                        <div>
                <input type="checkbox" id="s10" name="s10">
                <label for="horns">Symptôme 10</label>
            </div>
                        <div>
                <input type="checkbox" id="s13" name="s13">
                <label for="horns">Symptôme 13</label>
            </div>

            </div>

            <div class="flexRow spaceBetween">

            <div>
                <input type="checkbox" id="s2" name="s2">
                <label for="scales">Symptôme 2</label>
            </div>

            <div>
                <input type="checkbox" id="s5" name="s5">
                <label for="horns">Symptôme 5</label>
            </div>

            <div>
                <input type="checkbox" id="s8" name="s8">
                <label for="horns">Symptôme 8</label>
            </div>
                        <div>
                <input type="checkbox" id="s11" name="s11">
                <label for="horns">Symptôme 11</label>
            </div>
                        <div>
                <input type="checkbox" id="s14" name="s14">
                <label for="horns">Symptôme 14</label>
            </div>

            </div>

            <div class="flexRow spaceBetween">

            <div>
                <input type="checkbox" id="s3" name="s3">
                <label for="scales">Symptôme 3</label>
            </div>

            <div>
                <input type="checkbox" id="s6" name="s6">
                <label for="horns">Symptôme 6</label>
            </div>

            <div>
                <input type="checkbox" id="s9" name="s9">
                <label for="horns">Symptôme 9</label>
            </div>
                        <div>
                <input type="checkbox" id="s12" name="s12">
                <label for="horns">Symptôme 12</label>
            </div>
                        <div>
                <input type="checkbox" id="s15" name="s15">
                <label for="horns">Symptôme 15</label>
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