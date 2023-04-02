<?php
session_start();

include "../components/bdd_connexion.php";

$_SESSION['conn'] = false;

// Si la variable POST est remplie
if (!empty($_POST)) {
    if (!empty($_POST['id'])) {
        if (!empty($_POST['mdp'])) {

            // Récupération des données
            
            $id = htmlspecialchars($_POST['id']);
            $mdp = htmlspecialchars($_POST['mdp']);

            // Préparation de la requête préparée

            $stmt = $conn->prepare("SELECT * FROM praticien WHERE id = :id");
            $stmt->bindParam(':id', $id);
            
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$user) {
                
                $errorLogin = "<p class='red marginThinTop'>Identifiant ou mot de passe invalide</p>";
            }
            
            else {

                if (password_verify($mdp, $user['mdp'])) {

                    // On initialise les variables de SESSION
                    $_SESSION['conn'] = true;
                    $_SESSION['nom'] = $user['nom'];
                    $_SESSION['id_praticien'] = $user['id_praticien'];

                    header('Location: praticien.php');
                    exit;
                }

                else {
                    $errorPass = "<p class='red marginThinTop'>Identifiant ou mot de passe invalide</p>";
                }
            }
        }

        else {
            $errorEmpty = "<p class='red marginThinTop'>Veuillez remplir tous les champs</p>";
        }
    }

    else {
        $errorEmpty = "<p class='red marginThinTop'>Veuillez remplir tous les champs</p>";
    }
}
?>


<!DOCTYPE html>
<html lang="fr">

<?php
    include '../components/head.html';
?>

<body class="section-bg  min-vh-100 d-flex flex-column flex-sm-column flex-md-column flex-lg-column flex-xl-column flex-nowrap flex-sm-nowrap flex-md-nowrap flex-lg-nowrap flex-xl-nowrap justify-content-between justify-content-sm-between justify-content-md-between justify-content-lg-between justify-content-xl-between">

<?php
    include '../components/header.php';
?>

    <main class="backgroundCover">
        
        <!-- Formulaire de connexion -->
        <form action="login.php" method="post" role="form">
            <div class="containerDiv">

                <div class="section-title">
                    <h2>Connexion</h2>
                </div>

                <div class="form-group">
                        <input type="text" name="id" class="form-control" id="id" placeholder="Identifiant">
                </div>
                <div class="form-group marginThinTop">
                        <input type="password" name="mdp" class="form-control" id="mdp" placeholder="Mot de passe">
                </div>

                <?php

                    if (!empty($errorEmpty)) {
                        echo $errorEmpty;
                    }

                    if (!empty($errorLogin)) {
                        echo $errorLogin;
                    }

                    if (!empty($errorPass)) {
                        echo $errorPass;
                    }
                ?>

                <div class="text-end marginThinTop">
                    <button type="submit" class="btn btnPrimary">Se connecter</button>
                </div>

                <div class="marginThinTop">
                    <p>Vous ne possédez pas encore de compte ? <a href="signup.php">Inscrivez-vous ici</a></p>
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