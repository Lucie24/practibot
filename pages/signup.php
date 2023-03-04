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
                    <input type="text" name="login" class="form-control" id="id_sign" placeholder="Identifiant">
                </div>
                <div class="form-group marginThinTop">
                    <input type="text" name="password" class="form-control" id="password_sign" placeholder="Mot de passe">
                </div>
                <div class="form-group marginThinTop flexRow spaceBetween">
                    <div>
                        <input type="text" name="surname" class="form-control" id="surname_sign" placeholder="Nom">
                    </div>
                    <div>
                        <input type="text" name="name" class="form-control" id="name_sign" placeholder="Prénom">
                    </div>
                </div>
                <div class="form-group marginThinTop">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    <div class="validate"></div>
                </div>
                <div class="form-group marginThinTop">
                    <select name="specialite" id="specialite" class="form-select">
                        <option value="">Spécialité</option>
                        <option value="specialite_1">Généraliste</option>
                        <option value="specialite_2">Gériatre</option>
                        <option value="specialite_3">Cardiologue</option>
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