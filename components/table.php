<?php
    include "../components/bdd_connexion.php";
?>

<table class="tabPatient">

    <tr>
        <th class='hiddenDiv'></th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Age</th>
        <th>Adresse mail</th>
        <th>Téléphone</th>
        <th>Département</th>
        <th>Médecin traitant</th>
        <th>Symptômes</th>
        <th>Résultats</th>
    </tr>

    <?php

        // Création de la requête
        $stmt = $conn->prepare("SELECT * FROM patient");

        // Exécution de la requête préparée
        $stmt->execute();

        $i = 0;

        // Boucle pour afficher chaque ligne
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            if ($i % 2 == 0) {
                echo "<tr class='bgGrey'>";
                $i = 1;
            }
            else {
                echo "<tr>";
                $i = 0;
            }
            
            
            echo "<td><a href='../components/del_line.php?id=" . $row['id_patient'] . "'><img src='../assets/img/trash.png' width='25rem' height='auto'></a></td>";
            echo "<td>" . $row['nom'] . '</td>';
            echo "<td>" . $row['prenom'] . '</td>';
            echo "<td>" . $row['age'] . '</td>';
            echo "<td>" . $row['mail'] . '</td>';

            if (!empty ($row['tel'])) {
                echo "<td> 0" . $row['tel'] . '</td>';
            }
            else {
                echo "<td>Non enregistré</td>";
            }
            echo "<td>" . $row['departement'] . '</td>';

            if (!empty ($row['medecin_traitant'])) {
                echo "<td>" . $row['medecin_traitant'] . '</td>';
            }
            else {
                echo "<td>Non enregistré</td>";
            }

        }
    ?>
</table>