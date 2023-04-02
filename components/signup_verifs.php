<?php
   
    // Si la variable POST contient des informations
    if (!empty($_POST)){

        // Si la variable POST contient la valeur d'id
        if (!empty($_POST['id'])){

            // Si la variable POST contient la valeur de mdp
            if (!empty($_POST['mdp'])){

                if (preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+[\]{};:\'"\\|,.<>\/?-])(?=.*[^\w\d\s:])(\S){12,64}$/', $_POST['mdp'])) {
                
                    // Si la variable POST contient la valeur de mdp2
                    if (!empty($_POST['mdp2'])){
                        
                        // Si la variable POST contient la valeur de nom
                        if (!empty($_POST['nom'])){
                            
                            if (preg_match('/^[a-zA-Z]+$/', $_POST['nom'])) {

                                // Si la variable POST contient la valeur de prénom
                                if (!empty($_POST['prenom'])){

                                    if (preg_match('/^[a-zA-Z]+$/', $_POST['prenom'])) {

                                        // Si la variable POST contient la valeur d'email
                                        if (!empty($_POST['email'])){

                                            if (preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $_POST['email'])) {
                                            
                                                // Si la variable POST contient la valeur de département
                                                if (!empty($_POST['departement'])){

                                                    if (preg_match('/^\d+$/', $_POST['departement'])) {
                                                    
                                                        // Si la variable POST contient la valeur de spécialité
                                                        if (!empty($_POST['specialite'])){

                                                            if (preg_match('/^\d+$/', $_POST['specialite'])) {

                                                                // Récupération des données
                                                                $nom = htmlspecialchars($_POST['nom']);
                                                                $prenom = htmlspecialchars($_POST['prenom']);
                                                                $email = htmlspecialchars($_POST['email']);
                                                                $specialite = htmlspecialchars($_POST['specialite']);
                                                                $departement = htmlspecialchars($_POST['departement']);
                                                                $id = htmlspecialchars($_POST['id']);
                                                                $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
                                                                $timestamp = time();

                                                                // Préparation de la requête préparée permettant de tester si le nom d'utilisateur est déjà utilisé
                                                                $stmt = $conn->prepare("SELECT id FROM praticien WHERE id = :id");
                                                                $stmt->bindParam(':id', $id);
                                                                $stmt->execute();

                                                                $idInBdd = $stmt->fetch(PDO::FETCH_ASSOC);

                                                                // Si l'id n'est pas dans la base de données
                                                                if (!$idInBdd) {

                                                                    // Préparation de la requête préparée permettant de tester si l'adresse mail est déjà utiliséé
                                                                    $stmt = $conn->prepare("SELECT email FROM praticien WHERE email = :email");
                                                                    $stmt->bindParam(':email', $email);
                                                                    $stmt->execute();

                                                                    $emailInBdd = $stmt->fetch(PDO::FETCH_ASSOC);

                                                                    // Si l'email n'est pas dans la base de données
                                                                    if (!$emailInBdd) {

                                                                        // Si les mots de passes correspondent
                                                                        if ($_POST['mdp'] == $_POST['mdp2']){

                                                                            // Préparation de la requête préparée
                                                                            $sql = "INSERT INTO praticien (nom, prenom, email, specialite, departement, id, mdp, date_insc) VALUES (:nom, :prenom, :email, :specialite, :departement, :id, :mdp, :date_insc)";
                                                                            $stmt = $conn->prepare($sql);
                                
                                                                            // Liaison des variables avec les paramètres de la requête préparée
                                                                            $stmt->bindParam(':nom', $nom);
                                                                            $stmt->bindParam(':prenom', $prenom);
                                                                            $stmt->bindParam(':email', $email);
                                                                            $stmt->bindParam(':specialite', $specialite);
                                                                            $stmt->bindParam(':departement', $departement);
                                                                            $stmt->bindParam(':id', $id);
                                                                            $stmt->bindParam(':mdp', $mdp);
                                                                            $stmt->bindParam(':date_insc', $timestamp);
                                
                                                                            // Exécution de la requête préparée
                                                                            $stmt->execute();
                                                                            
                                                                            // Vide la variable et redirige l'utilisateur sur la page login.php
                                                                            unset($_POST);
                                                                            header('Location: login.php');
                                
                                                                        }
                                
                                                                        else {
                                                                            $notcorrespmdp = true;
                                                                        }              
                                                                    }

                                                                    else {
                                                                        $emailexists = true;
                                                                    }
                                                                }

                                                                else {
                                                                    $idexists = true;
                                                                }
                                                            }
                                                            else {
                                                                $wrongspecialite = true;
                                                            }
                                                        }

                                                        else {
                                                            $notspecialite = true;
                                                        }
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
                                                $wrongemail = true;
                                            }
                                        }

                                        else {
                                            $notemail = true;
                                        }
                                    }
                                    else {
                                        $wrongprenom = true;
                                    }
                                }

                                else {
                                    $notprenom = true;
                                }
                            }
                            else {
                                $wrongname = true;
                            }
                        }

                        else {
                            $notnom = true;
                        }
                    }

                    else {
                        $notmdp2 = true;
                    }
                }
                else {
                    $wrongmdp = true;
                }
            }

            else {
                $notmdp = true;
            }
        }

        else {
            $notid = true;
        }
    }

?>