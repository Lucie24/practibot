<?php
include "../components/bdd_connexion.php";
include "../components/signup_verifs.php";
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

    <main>
        
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
                    if (isset($idexists)) {
                        echo "<p class='red'>Cet identifiant n'est pas disponible</p>";
                    }
                ?>

                <div class="form-group marginThinTop">
                    <input type="password" name="mdp" class="form-control" id="mdp" placeholder="Mot de passe">
                </div>   

                <?php
                    if (isset($notmdp)) {
                        echo "<p class='red'>Vous n'avez pas entré votre mot de passe</p>";
                    }

                    if (isset($wrongmdp)) {
                        echo "<p class='red'>Votre mot de passe doit contient au moins 12 caractères, une lettre majuscule, une lettre minuscule, un chiffre et un caractère spécial";
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
                    }
                ?>

                <div class="form-group marginThinTop flexRow spaceBetween">
                    <div>
                        <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">
                    </div>

                    <div>
                        <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom">
                    </div>
                    <?php
                        if (isset($notnom)) {
                            echo "<p class='red'>Vous n'avez pas entré votre nom</p>";
                        }

                        
                        if (isset($notprenom)) {
                            echo "<p class='red'>Vous n'avez pas entré votre prénom</p>";
                        }

                        if (isset($wrongnom)) {
                            echo "<p class='red'>Votre nom ne doit comporter que des lettres</p>";
                        }

                        
                        if (isset($wrongprenom)) {
                            echo "<p class='red'>Votre prénom ne doit comporter que des lettres</p>";
                        }
                    ?>
                </div>

                <div class="form-group marginThinTop">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    <div class="validate"></div>
                    <?php
                    if (isset($notemail)) {
                        echo "<p class='red'>Vous n'avez pas entré votre adresse mail</p>";
                    }

                    if (isset($emailexists)) {
                        echo "<p class='red'>Cette adresse mail est déjà utilisée</p>";
                    }

                    if (isset($wrongmail)) {
                        echo "<p class='red'>Vous devez entrer une adresse email valide";
                    }
                ?>
                </div>

                <div class="form-group marginThinTop">

                    <?php
                    include "../components/liste_dep.html";
                    ?>

                    <div class="validate"></div>
                    <?php
                        if (isset($notdepartement)) {
                            echo "<p class='red'>Vous n'avez pas choisi de département</p>";
                        }

                        if (isset($wrongdepartement)) {
                            echo "<p class='red'>Vous devez choisir un département dans la liste ci-dessus";
                        }
                    ?>
                </div>

                <div class="form-group marginThinTop">
                    <select name="specialite" id="specialite" class="form-select">
                        <option value="">Spécialité</option>
                        <option value="1">Généraliste</option>
                        <option value="2">Gériatre</option>
                        <option value="3">Cardiologue</option>
                    </select>
                    <div class="validate"></div>

                    <?php
                        if (isset($notspecialite)) {
                            echo "<p class='red'>Vous n'avez pas choisi de spécialité</p>";
                        }

                        if (isset($wrongspecialite)) {
                            echo "<p class='red'>Vous devez choisir une spécialité dans la liste ci-dessus";
                        }
                    ?>
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