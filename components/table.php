
<table>

    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Age</th>
        <th>Adresse mail</th>
        <th>Symptômes</th>
        <th>Résultats</th>
    </tr>

    <?php
        #Boucle de colonnes
        for ($i = 0; $i < 10; $i++){

            if ($i % 2 == 0) {
                echo "<tr class='bgGrey'>";
            }
            else {
                echo "<tr>";
            }

            ?>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Age</td>
                <td>Adresse mail</td>
                <td>
                
                <?php
                    #Boucle de colonnes
                    for ($j = 0; $j < 3; $j++){
                        echo "symptôme " . $j . " ";
                    }
                ?>

                </td>
                <td>Résultats</td>
            </tr>
    <?php
        }
    ?>
</table>