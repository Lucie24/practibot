<?php

    include "../components/bdd_connexion.php";
    
    if (!empty($_POST)){
        if (!empty($_POST['id'])){
            if (!empty($_POST['mdp'])){
                if (!empty($_POST['mdp2'])){
                    if (!empty($_POST['nom'])){
                        if (!empty($_POST['prenom'])){
                            if (!empty($_POST['email'])){
                                if (!empty($_POST['departement'])){
                                    if (!empty($_POST['specialite'])){

                                            // Récupération des données

                                            $nom = htmlspecialchars($_POST['nom']);
                                            $prenom = htmlspecialchars($_POST['prenom']);
                                            $email = htmlspecialchars($_POST['email']);
                                            $specialite = htmlspecialchars($_POST['specialite']);
                                            $departement = htmlspecialchars($_POST['departement']);
                                            $id = htmlspecialchars($_POST['id']);
                                            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

                                        if ($_POST['mdp'] == $_POST['mdp2']){

                                            // Préparation de la requête préparée
                                            $sql = "INSERT INTO praticien (nom, prenom, email, specialite, departement, id, mdp) VALUES (:nom, :prenom, :email, :specialite, :departement, :id, :mdp)";
                                            $stmt = $conn->prepare($sql);

                                            // Liaison des variables avec les paramètres de la requête préparée
                                            $stmt->bindParam(':nom', $nom);
                                            $stmt->bindParam(':prenom', $prenom);
                                            $stmt->bindParam(':email', $email);
                                            $stmt->bindParam(':specialite', $specialite);
                                            $stmt->bindParam(':departement', $departement);
                                            $stmt->bindParam(':id', $id);
                                            $stmt->bindParam(':mdp', $mdp);

                                            // Exécution de la requête préparée
                                            $stmt->execute();

                                            if (!$stmt) {
                                                echo "\nPDO::errorInfo():\n";
                                                print_r($dbh->errorInfo());
                                            }

                                            // Stocke des informations en variable de SESSION
                                            $_SESSION['compteCree'] = "Votre compte a bien été créé";
                                            
                                            // Vide la variable et redirige l'utilisateur sur la page login.php
                                            unset($_POST);
                                            header('Location: login.php');


                                        }

                                        else {
                                            $notcorrespmdp = true;
                                        }              
                                    }

                                    else {
                                        $notspecialite = true;
                                    }
                                }

                                else {
                                    $notdepartement = true;
                                }
                            }

                            else {
                                $notemail = true;
                            }
                        }

                        else {
                            $notprenom = true;
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
                $notmdp = true;
            }
        }

        else {
            $notid = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">

<?php
    include '../components/head.html';
?>

<body class="section-bg">

<?php
    include '../components/header.php';
?>

    <main class="marginFatTop">
        
        <!-- Formulaire de connexion -->
        <form action="signup.php" method="post" role="form">
            <div class="containerDiv">

                <div class="section-title">
                    <h2>Inscription</h2>
                </div>

                <div class="form-group">
                    <input type="text" name="id" class="form-control" id="id" placeholder="Identifiant">
                </div>
                
                <?php
                    if (isset($notid)) {
                        echo "<p class='red'>Vous n'avez pas entré votre identifiant</p>";
                    }
                ?>

                <div class="form-group marginThinTop">
                    <input type="password" name="mdp" class="form-control" id="mdp" placeholder="Mot de passe">
                </div>   

                <?php
                    if (isset($notmdp)) {
                        echo "<p class='red'>Vous n'avez pas entré votre mot de passe</p>";
                    }
                ?>

                <div class="form-group marginThinTop">
                    <input type="password" name="mdp2" class="form-control" id="mdp2" placeholder="Confirmer votre mot de passe">
                </div>
                                
                <?php
                    if (isset($notmdp2)) {
                        echo "<p class='red'>Vous n'avez pas entré la confirmation de votre mot de passe</p>";
                    }
                    elseif (isset($notcorrespmdp)) {
                        echo "<p class='red'>Vos mots de passes ne correspondent pas</p>";
                        echo "/n mdp 1 :" . $mdp;
                        echo "/n mdp 2 :" . $mdp2;
                    }
                ?>

                <div class="form-group marginThinTop flexRow spaceBetween">
                    <div>
                        <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">
                    </div>

                    <div>
                        <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom">
                    </div>
                </div>
                                    
                <?php
                    if (isset($notnom)) {
                        echo "<p class='red'>Vous n'avez pas entré votre nom</p>";
                    }

                    
                    if (isset($notprenom)) {
                        echo "<p class='red'>Vous n'avez pas entré votre prénom</p>";
                    }
                ?>

                <div class="form-group marginThinTop">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    <div class="validate"></div>
                </div>
                                
                <?php
                    if (isset($notemail)) {
                        echo "<p class='red'>Vous n'avez pas entré votre adresse mail</p>";
                    }
                ?>

                <div class="form-group marginThinTop">

                    <?php
                    include "../components/liste_dep.html";
                    ?>

                    <div class="validate"></div>
                </div>
                                
                <?php
                    if (isset($notdepartement)) {
                        echo "<p class='red'>Vous n'avez pas choisi de département</p>";
                    }
                ?>

                <div class="form-group marginThinTop">
                    <select name="specialite" id="specialite" class="form-select">
                        <option value="">Spécialité</option>
                        <option value="1">Généraliste</option>
                        <option value="2">Gériatre</option>
                        <option value="3">Cardiologue</option>
                    </select>
                    <div class="validate"></div>
                </div>
                                
                <?php
                    if (isset($notspecialite)) {
                        echo "<p class='red'>Vous n'avez pas choisi de spécialité</p>";
                    }
                ?>

                <div class="text-end marginThinTop">
                    <button type="submit" class="btn btnPrimary">S'inscrire</button>
                </div>
                <div class="marginThinTop">
                    <p>Vous possédez déjà un compte ? <a href="login.php">Connectez-vous ici</a></p>
                </div>
            </div>
        </form>
    </main>

    <?php
        include "../components/footer.html";
        include "../components/buttonTop.html";
        include "../components/scripts.html";
    ?>

</body>

</html>