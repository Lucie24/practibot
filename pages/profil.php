<?php
session_start();

include "../components/verif_conn.php";
?>

<!DOCTYPE html>
<html lang="fr">

<?php
    #Head
    include '../components/head.html';
?>

<body class="section-bg">

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

        <div class="containerTab">
            <form action="profil.php" method="post" role="form">
                <div class="row">
                    <div class="col">
                        <p>Votre photo de profil</p>
                    </div>
                    <div class="col">
                        <p>Vos informations personnelles</p>
                        <div class="form-group">
                            <input type="text" name="id" class="form-control" id="id" placeholder="Nom">
                        </div>
                        <div class="form-group marginThinTop">
                            <input type="password" name="mdp" class="form-control" id="mdp" placeholder="Prénom">
                        </div>
                        <div class="form-group marginThinTop">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="text-end marginThinTop">
                        <button type="submit" class="btn btnPrimary">Modifier</button>
                    </div>
                </div>
                <p class="textLeft">Votre compte a été créé le *insérer timestamp*</p>
            </form>
        </div>

    </main>

    <?php
        #Footer
        include "../components/footer.html";
        include "../components/buttonTop.html";
        include "../components/scripts.html";
    ?>

</body>

</html>