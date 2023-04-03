<?php

if (!empty($_POST)) {
    # Récupération du formulaire choisi
    $form = $_GET['form'];

    switch ($form) {

        case 1:
            # Définition du tableau de maladies 

            $maladies = array(
                "Pneumonie" => 0,
                "Grippe" => 0,
                "Appendicite" => 0,
                "Gastro-entérite" => 0,
                "Anémie" => 0,
                "Migraine" => 0,
                "Bronchite" => 0,
                ""
            );

            # Changement de variables pour affecter les maladies 
            $i = 0;
            while ($i < 13) {
                if (isset($_POST[$i])){
                    if ($_POST[$i] == "on") {
                        switch ($_POST[$i]) {
                            case 1 :
                                $_SESSION['douleurAbdo'] = "on";
                                break;
                            
                            case 2 :
                                $_SESSION['douleurArti'] = "on";
                                break;
                            
                            case 3 :
                                $_SESSION['douleurGorge'] = "on";
                                break;
                            
                            case 4 :
                                $_SESSION['douleurDos'] = "on";
                                break;

                            case 5 :
                                $_SESSION['eruptionsCutanees'] = "on";
                                break;

                            case 6 :
                                $_SESSION['essoufflement'] = "on";
                                break;
                            
                            case 7 :
                                $_SESSION['fatigue'] = "on";
                                break;
                            
                            case 8 :
                                $_SESSION['fièvre'] = "on";
                                break;

                            case 9 :
                                $_SESSION['mauxTete'] = "on";
                                break;

                            case 10 :
                                $_SESSION['nausees'] = "on";
                                break;
                            
                            case 11 :
                                $_SESSION['pertePoids'] = "on";
                                break;
                            
                            case 12 :
                                $_SESSION['toux'] = "on";
                                break;

                            case 13 :
                                $_SESSION['troubleHumeur'] = "on";
                                break;
                        }
                    }
                }
            $i = $i + 1;

            # Algo pour définir la maladie 
        }  

            break;

        # Algo de cardiologie
        case 2:
            echo "algorithme de cardiologie";
            break;

        # Algo de gériatrie
        case 3:
            echo "algorithme de gériatrie";
            break;

        default:
            echo "Cette spécialité n'existe pas.";
            break;  
    }
    
}

?>

