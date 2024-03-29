<?php
session_start();

include "../components/verif_conn.php";
include "../components/bdd_connexion.php";

// Préparation de la requête préparée pour afficher les données en placeholder
// Mofifier la requête pour la link avec le tableau spécialité
$stmt = $conn->prepare("SELECT * FROM praticien WHERE id_praticien = :id_praticien");
$stmt->bindParam(':id_praticien', $_SESSION['id_praticien']);

$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (isset($user)) {

    // Transformation du timestamp en jours
    date_default_timezone_set('UTC');
    $date = date('d/m/Y', $user['date_insc']);

    switch ($user['specialite']) {
        case 1 :
            $specialite = "Généraliste"; 
            break;
        case 2 :
            $specialite = "Gériatre"; 
            break;
        case 3 :
            $specialite = "Cardiologue"; 
            break;
    }

    if (!empty($_POST)) {
        $error = false;
        
        $date = date('d/m/Y', $user['date_insc']);

        if (!empty($_POST['newNom'])) {
            if (preg_match('/^[a-zA-Z]+$/', $_POST['newNom'])) {
                $_SESSION['nom'] = htmlspecialchars($_POST['newNom']) ;
            }
            else {
                $wrongnom = true;
                $error = true;
            }
        }

        if (!empty($_POST['newPrenom'])) {
            if (preg_match('/^[a-zA-Z]+$/', $_POST['newPrenom'])) {
                $_SESSION['prenom'] = htmlspecialchars($_POST['newPrenom']) ;
            }
            else {
                $wrongprenom = true;
                $error = true;
            }
        }

        if (!empty($_POST['newEmail'])) {
            if (preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $_POST['newEmail'])) {
                $_SESSION['email'] = htmlspecialchars($_POST['newEmail']) ;
            }
            else {
                $wrongemail = true;
                $error = true;
            }
        }

        if (!empty($_POST['newSpecialite'])) {
            if (preg_match('/^\d+$/', $_POST['newSpecialite'])) {
                $_SESSION['specialite'] = htmlspecialchars($_POST['newSpecialite']) ;
            }
            else {
                $wrongspecialite = true;
                $error = true;
            }
        }

        if (!empty($_POST['newDepartement'])) {
            if (preg_match('/^\d+$/', $_POST['newDepartement'])) {
                $_SESSION['departement'] = htmlspecialchars($_POST['newDepartement']) ;
            }
            else {
                $wrongdepartement = true;
                $error = true;
            }
        }

        if (!empty($_POST['newMdp'])) {
            if (preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+[\]{};:\'"\\|,.<>\/?-])(?=.*[^\w\d\s:])(\S){12,64}$/', $_POST['newMdp'])) {
                if ($_POST['newMdp'] == $_POST['newMdp2']) {
                    $_SESSION['mdp'] = password_hash($_POST['newMdp'], PASSWORD_DEFAULT); ;
                }
                else {
                    $notsamemdp = true;
                    $error = true;
                }
            }
            else {
                $wrongmdp = true;
                $error = true;
            }
        }
        
        if ($error == false){
            header('Location: ../components/modif_profil.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<?php
    #Head
    include '../components/head.html';
?>

<body class="section-bg min-vh-100 d-flex flex-column flex-sm-column flex-md-column flex-lg-column flex-xl-column flex-nowrap flex-sm-nowrap flex-md-nowrap flex-lg-nowrap flex-xl-nowrap justify-content-between justify-content-sm-between justify-content-md-between justify-content-lg-between justify-content-xl-between">

<?php
    #Header
    include '../components/header_co.php';
?>

    <main class="marginFatTop">

        <div class="section-title">
            <h2>Mon profil</h2>
        </div>

        <?php
        #Faire la récupération des infos dans la base de données pour les afficher en tant que placeholder dans les input
        ?>

        <div class="containerTab2 marginContent">
            <form class="paddingContent" action="profil.php" method="post" role="form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="nom">Nom :</label>
                            <input type="text" name="newNom" class="form-control" id="nom" placeholder="<?php echo $user['nom']?>">
                        </div>
                        <?php
                            if (isset($wrongnom)) {
                                echo "<p class='red'>Votre nom ne doit comporter que des lettres</p>";
                            }
                        ?>
                        <div class="form-group marginThinTop">
                            <label for="nom">Prénom :</label>
                            <input type="text" name="newPrenom" class="form-control" id="prenom" placeholder="<?php echo $user['prenom']?>">
                        </div>
                        <?php
                            if (isset($wrongprenom)) {
                                echo "<p class='red'>Votre prénom ne doit comporter que des lettres</p>";
                            }
                        ?>
                        <div class="form-group marginThinTop">
                            <label for="nom">Email :</label>
                            <input type="email" class="form-control" name="newEmail" id="email" placeholder="<?php echo $user['email']?>">
                        </div>
                        <?php
                            if (isset($wrongmail)) {
                                echo "<p class='red'>Vous devez entrer une adresse email valide";
                            }
                        ?>
                        <div class="form-group marginThinTop">
                            <label for="nom">Mot de passe :</label>
                            <input type="password" name="newMdp" class="form-control" id="mdp" placeholder="Nouveau mot de passe">
                        </div>
                        <?php
                            if (isset($wrongmdp)) {
                                echo "<p class='red'>Votre mot de passe doit contient au moins 12 caractères, une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial";
                            }
                        ?>
                        <div class="form-group marginThinTop">
                            <input type="password" name="newMdp2" class="form-control" id="mdp2" placeholder="Confirmation du mot de passe">
                        </div>
                        <?php
                            if (isset($notsamemdp)) {
                                echo "<p class='red'>Vos mots de passes ne correspondent pas</p>";
                            }
                        ?>
                        <div class="form-group marginThinTop">
                            <label for="nom">Spécialité :</label>
                            <select name="newSpecialite" id="specialite" class="form-select">
                                <option value=""><?php echo $specialite?></option>
                                <option value="1">Généraliste</option>
                                <option value="2">Gériatre</option>
                                <option value="3">Cardiologue</option>
                            </select>
                        </div>
                        <?php
                            if (isset($wrongspecialite)) {
                                echo "<p class='red'>Vous devez choisir une spécialité dans la liste ci-dessus";
                            }
                        ?>
                        <div class="form-group marginThinTop">
                            <label for="nom">Département :</label>
                            <?php
                            include "../components/liste_dep.html";
                            ?>
                        </div>
                        <?php
                            if (isset($wrongdepartement)) {
                                echo "<p class='red'>Vous devez choisir un département dans la liste ci-dessus";
                            }
                        ?>
                        
                        <div class="text-end marginThinTop">
                            <button type="submit" class="btn btnPrimary">Modifier</button>
                        </div>
                    </div>
                </div>
                <div class="row marginThinTop">
                    <div class="col">
                        <a href="#" class="red" data-bs-toggle="modal" data-bs-target="#unsubscribe">Supprimer mon compte</a>
                    </div>
                    <div class="col">
                        <?php
                            echo '<p class="textLeft">Votre compte a été créé le ' . $date . '</p>';
                        ?>
                    </div>
                </div>
            </form>

        </div>
    </main>

    <!-- ======= Popup formulaires ======= -->
    <div class="modal fade" id="unsubscribe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Mon profil</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center flexRow">
                    <div class="container text-center">
                        <div class="row align-items-center">
                            <p>Souhaitez-vous supprimer définitivement votre compte ? (c'est très long !)</p>
                            <div class="col">
                                <a href="../components/unsubscribe.php" class="btn btnPrimary">Oui</a>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btnSecundary" data-bs-dismiss="modal" aria-label="Close">Non</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        #Footer
        include "../components/footer.html";
        include "../components/buttonTop.html";
        include "../components/scripts.html";
    ?>

</body>

</html>