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
        <form action="login.php" method="post" role="form">
            <div class="containerDiv">

                <div class="section-title">
                    <h2>Inscription</h2>
                </div>

                <div class="form-group">
                    <input type="text" name="log" class="form-control" id="log" placeholder="Identifiant">
                </div>
                <div class="form-group marginThinTop">
                    <input type="text" name="mdp" class="form-control" id="mdp" placeholder="Mot de passe">
                </div>
                <div class="form-group marginThinTop flexRow spaceBetween">
                    <div>
                        <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">
                    </div>
                    <div>
                        <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom">
                    </div>
                </div>
                <div class="form-group marginThinTop">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    <div class="validate"></div>
                </div>
                <div class="form-group marginThinTop">

                    <?php
                    include "../components/liste_dep.html";
                    ?>

                    <div class="validate"></div>
                </div>
                <div class="form-group marginThinTop">
                    <select name="specialite" id="specialite" class="form-select">
                        <option value="">Spécialité</option>
                        <option value="1">Généraliste</option>
                        <option value="2">Gériatre</option>
                        <option value="3">Cardiologue</option>
                    </select>
                    <div class="validate"></div>
                </div>
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