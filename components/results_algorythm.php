<?php

if (!empty($_POST)) {
    # Récupération du formulaire choisi
    $form = $_GET['form'];

    switch ($form) {

        case 1:
            
            # Changement de variables pour affecter les maladies 
            $i = 0;
            while ($i < 13) {
                if (isset($_POST[$i])){
                    if ($_POST[$i] == "on") {
                        switch ($_POST[$i]) {
                            case 1 :
                                $douleurAbdo = "on";
                                break;
                            
                            case 2 :
                                $douleurArti = "on";
                                break;
                            
                            case 3 :
                                $douleurGorge = "on";
                                break;
                            
                            case 4 :
                                $douleurDos = "on";
                                break;

                            case 5 :
                                $eruptionsCutanees = "on";
                                break;

                            case 6 :
                                $essoufflement = "on";
                                break;
                            
                            case 7 :
                                $fatigue = "on";
                                break;
                            
                            case 8 :
                                $fièvre = "on";
                                break;

                            case 9 :
                                $mauxTete = "on";
                                break;

                            case 10 :
                                $nausees = "on";
                                break;
                            
                            case 11 :
                                $pertePoids = "on";
                                break;
                            
                            case 12 :
                                $toux = "on";
                                break;

                            case 13 :
                                $troubleHumeur = "on";
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

