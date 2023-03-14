<?php
    include "../components/bdd_connexion.php";

    # Si la variable POST est remplie
    if (!empty($_POST)) {

        //Récupération des données
        
        $id = $_POST['id'];
        $mdp = $_POST['mdp'];

        // Préparation de la requête préparée

        $stmt = $conn->prepare("SELECT * FROM praticien WHERE id = :id AND mdp = :mdp");
        $stmt->execute(['id' => $id, 'mdp' => $mdp]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            
            $errorLogin = "<p class='red marginThinTop'>Votre identifiant ou votre mot de passe est incorrect</p>";
        }
        
        else {

            header('Location: praticien.php');
            exit;
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

    <main class="marginFatTop backgroundCover">
        
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
                    if (!empty($errorLogin)) {
                        echo $errorLogin;
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