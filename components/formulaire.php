<?php

echo "<form action='results.php?form=" . $form . "' method='post' role='form'>";
?>

    <div class="row">
        <div class="col-md-4 form-group">
            <input type="text" name="surname" class="form-control" id="surname" placeholder="Nom">
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
            
            <div class="form-group flexRow spaceBetween">
                <div>
                    <input type="text" name="age" class="form-control" id="age" placeholder="Age">
                    <div class="validate"></div>
                </div>

                <div>
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Numéro de téléphone">
                    <div class="validate"></div>
                </div>
            </div>
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

                <?php

                // Création de la requête
                $stmt = $conn->prepare("SELECT * FROM praticien WHERE specialite = 1");

                // Exécution de la requête préparée
                $stmt->execute();

                $i = 0;

                // Boucle pour afficher chaque ligne
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                    echo "<option value=' " . $i .  " '>" . $row['nom'] . "</option>";
                }
                ?>
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
    <div class="text-center">
        <button type="submit" class="btn btnPrimary marginThinTop">Se diagnostiquer</button>
    </div>
</form>