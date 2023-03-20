<?php
session_start();

include "../components/verif_conn.php";
include "../components/bdd_connexion.php";

// Préparation de la requête préparée

$stmt = $conn->prepare("SELECT * FROM praticien WHERE id_praticien = :id_praticien");
$stmt->execute(['id_praticien' => $_SESSION['id_praticien']]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);
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

        <div class="containerTab">
            <form action="profil.php" method="post" role="form" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <p>Votre photo de profil</p>
                        <input type="file" name="avatar">
                        

                    </div>
                    <div class="col">
                        <p>Vos informations personnelles</p>
                        <div class="form-group">
                            <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom">
                        </div>
                        <div class="form-group marginThinTop">
                            <input type="password" name="prenom" class="form-control" id="prenom" placeholder="Prénom">
                        </div>
                        <div class="form-group marginThinTop">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="form-group marginThinTop">
                            <select name="specialite" id="specialite" class="form-select">
                                <option value="">Spécialité</option>
                                <option value="1">Généraliste</option>
                                <option value="2">Gériatre</option>
                                <option value="3">Cardiologue</option>
                            </select>
                        </div>
                        <div class="form-group marginThinTop">
                            <?php
                            include "../components/liste_dep.html";
                            ?>
                        </div>
                        
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
                            echo '<p class="textLeft">Votre compte a été créé le ' . $user['date_insc'] . '</p>';
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