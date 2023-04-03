<?php
#Récupération du formulaire choisi
$form = $_GET['form'];

//toutes les verifs 
if (!empty($_POST)) {

    var_dump($_POST);
    // Si la variable POST contient la valeur de nom
    if (!empty($_POST['surname'])) {

        // Si la valeur nom possède que des lettres avec une chaine plus grande qu'un caractère 
        if (preg_match('/^[a-zA-Z]+$/', $_POST['surname'])) {

            // Si la variable POST contient la valeur de prénom
            if (!empty($_POST['name'])) {

                // Si la valeur prénom possède que des lettres avec une chaine plus grande qu'un caractère 
                if (preg_match('/^[a-zA-Z]+$/', $_POST['name'])) {

                    // Si la variable POST contient la valeur d'email
                    if (!empty($_POST['email'])) {

                        // Vérification du format de l'email
                        if (preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $_POST['email'])) {

                            // Si la variable POST contient la valeur de département
                            if (!empty($_POST['age'])) {

                                if (preg_match('/^\d+$/', $_POST['age'])) {

                                    // Si la variable POST contient la valeur de telephone
                                    if (!empty($_POST['departement'])) {

                                        if (preg_match('/^\d+$/', $_POST['departement'])) {

                                            // Récupération des données pour les transmettre en session afin 
                                            // qu'elles soient réutilisables sur d'autres pages
                                            $_SESSION['surname'] = htmlspecialchars($_POST['surname']);
                                            $_SESSION['name'] = htmlspecialchars($_POST['name']);
                                            $_SESSION['email'] = htmlspecialchars($_POST['email']);
                                            $_SESSION['age'] = htmlspecialchars($_POST['age']);
                                            $_SESSION['departement'] = htmlspecialchars($_POST['departement']);
                                            
                                            

                                            // Si la variable POST contient la valeur de age
                                            if (isset($_POST['phone'])) {
                                                
                                                // Si c'est un numéro de téléphone français
                                                if (preg_match('/^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/', $_POST['phone'])) {
                                                    $_SESSION['phone'] = htmlspecialchars($_POST['phone']);
                                                }
                                                else {
                                                    $wrongphone = true;
                                                }
                                            } 
                                            else {
                                                $_SESSION['phone'] = "";
                                            }

                                            if (isset($_POST['doctor'])) {
                                                $_SESSION['doctor'] = htmlspecialchars($_POST['doctor']);
                                            }
                                            else {
                                                $_SESSION['doctor'] = "";
                                            }

                                            if (isset($_POST['message'])) {
                                                $_SESSION['message'] = htmlspecialchars($_POST['message']);
                                            }
                                            else {
                                                $_SESSION['message'] = "";
                                            }

                                            include '../components/results_algorythm.php';
                                        }
                                        else {
                                            $wrongdepartement = true;
                                        }
                                    } 
                                    else {
                                        $notdepartement = true;
                                    }
                                }
                                else {
                                    $wrongage = true;
                                }
                            } 
                            else {
                                $notage = true;
                            }
                        }
                        else {
                            $wrongemail = true;
                        }
                    } 
                    else {
                        $notemail = true;
                    }
                }
                else {
                    $wrongname = true;
                }
            } 
            else {
                $notname = true;
            }
        }
        else {
            $wrongsurname = true;
        }
     } 
    else {
        $notsurname = true;
    }
}
?>