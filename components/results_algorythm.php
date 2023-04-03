<?php

if (!empty($_POST)) {
    # Récupération du formulaire choisi
    $form = $_GET['form'];

    $maladies = array(
        "infarctus du myocarde" => 0,
        "insuffisance cardiaque" => 0,
        "angine de poitrine" => 0,
        "cardiomyopathie" => 0,
        "fibrillation auriculaire" => 0,
        "maladie artérielle périphérique" => 0,
        "maladie coronarienne" => 0
    );
    # Changement de variables pour affecter les maladies 
    $i = 1;
    $symptome = "";
    while ($i < 16) {
        if (isset($_POST[$i])){
            if ($_POST[$i] == "on") {
                switch ($i) {
                    case 1 :
                        if ($symptome == "") {
                            $symptome = "anxiété";
                        }
                        else {
                            $symptome = $symptome . " - " . "anxiété";
                        }
                        $maladies["insuffisance cardiaque"] += 1;
                        $maladies["angine de poitrine"] += 1;
                        $maladies["maladie coronarienne"] += 1;
                        break;
                    
                    case 2 :
                        if ($symptome == "") {
                            $symptome = "douleur abdominale";
                        }
                        else {
                            $symptome = $symptome . " - " . "douleur abdominale";
                        }
                        $maladies["infarctus du myocarde"] += 1;
                        break;
                    
                    case 3 :
                        if ($symptome == "") {
                            $symptome = "douleur au cou ou à la machoire";
                        }
                        else {
                            $symptome = $symptome . " - " . "douleur au cou ou à la machoire";
                        }
                        $maladies["infarctus du myocarde"] += 1;
                        $maladies["angine de poitrine"] += 1;
                        $maladies["maladie coronarienne"] += 1;
                        break;
                    
                    case 4 :
                        if ($symptome == "") {
                            $symptome = "douleur ou faiblesse dans les bras ou dans les jambes";
                        }
                        else {
                            $symptome = $symptome . " - " . "douleur ou faiblesse dans les bras ou dans les jambes";
                        }
                        $maladies["maladie artérielle périphérique"] += 1;
                        break;

                    case 5 :
                        if ($symptome == "") {
                            $symptome = "douleur ou pression à la poitrine";
                        }
                        else {
                            $symptome = $symptome . " - " . "douleur ou pression à la poitrine";
                        }
                        $maladies["infarctus du myocarde"] += 1;
                        $maladies["angine de poitrine"] += 1;
                        $maladies["cardiomyopathie"] += 1;
                        break;

                    case 6 :
                        if ($symptome == "") {
                            $symptome = "essoufflement";
                        }
                        else {
                            $symptome = $symptome . " - " . "essoufflement";
                        }
                        $maladies["insuffisance cardiaque"] += 1;
                        $maladies["cardiomyopathie"] += 1;
                        break;
                    
                    case 7 :
                        if ($symptome == "") {
                            $symptome = "essoufflement pendant l'exercice";
                        }
                        else {
                            $symptome = $symptome . " - " . "essoufflement pendant l'exercice";
                        }
                        $maladies["insuffisance cardiaque"] += 1;
                        $maladies["maladie coronarienne"] += 1;
                        break;
                    
                    case 8 :
                        if ($symptome == "") {
                            $symptome = "étourdissement ou évanouissement";
                        }
                        else {
                            $symptome = $symptome . " - " . "étourdissement ou évanouissement";
                        }
                        $maladies["insuffisance cardiaque"] += 1;
                        break;

                    case 9 :
                        if ($symptome == "") {
                            $symptome = "fatigue";
                        }
                        else {
                            $symptome = $symptome . " - " . "fatigue";
                        }
                        $maladies["insuffisance cardiaque"] += 1;
                        $maladies["fibrillation auriculaire"] += 1;
                        $maladies["maladie coronarienne"] += 1;
                        break;

                    case 10 :
                        if ($symptome == "") {
                            $symptome = "gonflement des jambes, des chevilles ou des pieds";
                        }
                        else {
                            $symptome = $symptome . " - " . "gonflement des jambes, des chevilles ou des pieds";
                        }
                        $maladies["insuffisance cardiaque"] += 1;
                        $maladies["maladie artérielle périphérique"] += 1;
                        break;
                    
                    case 11 :
                        if ($symptome == "") {
                            $symptome = "nausées ou vomissements";
                        }
                        else {
                            $symptome = $symptome . " - " . "nausées ou vomissements";
                        }
                        $maladies["insuffisance cardiaque"] += 1;
                        $maladies["infarctus du myocarde"] += 1;
                        break;
                    
                    case 12 :
                        if ($symptome == "") {
                            $symptome = "palpitations";
                        }
                        else {
                            $symptome = $symptome . " - " . "palpitations";
                        }
                        $maladies["fibrillation auriculaire"] += 1;
                        break;

                    case 13 :
                        if ($symptome == "") {
                            $symptome = "transpiration excessive";
                        }
                        else {
                            $symptome = $symptome . " - " . "transpiration excessive";
                        }
                        $maladies["insuffisance cardiaque"] += 1;
                        $maladies["infarctus du myocarde"] += 1;
                        break;
                    case 14 :
                        if ($symptome == "") {
                            $symptome = "troubles de la mémoire";
                        }
                        else {
                            $symptome = $symptome . " - " . "troubles de la mémoire";
                        }
                        $maladies["insuffisance cardiaque"] += 1;
                        break;
                    case 15 :
                        if ($symptome == "") {
                            $symptome = "troubles du sommeil";
                        }
                        else {
                            $symptome = $symptome . " - " . "troubles du sommeil";
                        }
                        $maladies["insuffisance cardiaque"] += 1;
                        break;
                }
            }
        }
        $i = $i + 1;
    }
            
    // Trouver l'entrée qui a la plus grande valeur
    $max_value = max(array_values($maladies));
    $_SESSION['maladie'] = array_search($max_value, $maladies);
    $_SESSION['symptome'] = $symptome;
    
    // Vide la variable et redirige l'utilisateur sur la page login.php
    header('Location: results.php');    
}

?>

