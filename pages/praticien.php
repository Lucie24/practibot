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

<body class="section-bg min-vh-100 d-flex flex-column flex-sm-column flex-md-column flex-lg-column flex-xl-column flex-nowrap flex-sm-nowrap flex-md-nowrap flex-lg-nowrap flex-xl-nowrap justify-content-between justify-content-sm-between justify-content-md-between justify-content-lg-between justify-content-xl-between">

<?php
    #Header
    include '../components/header_co.php';
?>

    <main class="marginFatTop">

        <div class="section-title">
            <h2>Bienvenue sur l'espace praticien !</h2>
        </div>

        <div class="containerTab">

            <?php
                #Table
                include '../components/table.php';
            ?>

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