<table class="tabForm">
    <tr>
        <?php

        // Création de la requête
        $stmt = $conn->prepare("SELECT * FROM specialite_symptome ss INNER JOIN symptome s ON ss.id_symptome = s.id_symptome WHERE id_spe = :form ORDER BY s.nom");
        $stmt->bindParam(':form', $form);

        // Exécution de la requête préparée
        $stmt->execute();

        $i = 0;
        $j = 0;

        // Boucle pour afficher chaque ligne
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $j = $j + 1;

            if ($i == 3 ) {

                echo "</tr>";
                echo "<tr>";

                $i = 0;
            }

            echo "<td>";
            echo "<div>";
            echo "<input type='checkbox' id='" . $j . "' name='" . $j . "'>";
            echo "<label for='" . $j . "'>" . $row['nom'] . "</label>";
            echo "</div>";
            echo "</td>";
            
            $i = $i + 1;
        }
        ?>
    </tr>
</table>