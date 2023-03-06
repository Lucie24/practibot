<?php
    include "../components/bdd_connexion.php";

    if (!empty($_POST)) {

        if (!empty($_POST['nom'])){

            //Récupération des données

            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $specialite = $_POST['specialite'];
            $departement = $_POST['departement'];
            $log = $_POST['log'];
            $mdp = $_POST['mdp'];

            // Préparation de la requête préparée
            $sql = "INSERT INTO praticien (nom, prenom, email, specialite, departement, log, mdp) VALUES (:nom, :prenom, :email, :specialite, :departement, :log, :mdp)";
            $stmt = $conn->prepare($sql);

            // Liaison des variables avec les paramètres de la requête préparée
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':prenom', $prenom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':specialite', $specialite);
            $stmt->bindParam(':departement', $departement);
            $stmt->bindParam(':log', $log);
            $stmt->bindParam(':mdp', $mdp);

            // Exécution de la requête préparée
            $stmt->execute();
        }
        else {

            //Récupération des données
            
            $log = $_POST['log'];
            $mdp = $_POST['mdp'];

            // Préparation de la requête préparée

            $stmt = $conn->prepare("SELECT * FROM praticien WHERE log = :log AND mdp = :mdp");
            $stmt->execute(['log' => $log, 'mdp' => $mdp]);

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$user) {
                
                echo "l'utilisateur n'existe pas";
            }
            
            else {

                header('Location: praticien.php');
                exit;
            }

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
                        <input type="text" name="log" class="form-control" id="log" placeholder="Identifiant">
                </div>
                <div class="form-group marginThinTop">
                        <input type="text" name="mdp" class="form-control" id="mdp" placeholder="Mot de passe">
                </div>
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