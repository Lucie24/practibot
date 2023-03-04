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
        <form action="praticien.php" method="post" role="form">
            <div class="containerDiv">

                <div class="section-title">
                    <h2>Connexion</h2>
                </div>

                <div class="form-group">
                        <input type="text" name="login" class="form-control" id="id_login" placeholder="Identifiant">
                </div>
                <div class="form-group marginThinTop">
                        <input type="text" name="password" class="form-control" id="password_login" placeholder="Mot de passe">
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