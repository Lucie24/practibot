<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PractiBot</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Medilab - v4.10.0
    * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class=" min-vh-100 d-flex flex-column flex-sm-column flex-md-column flex-lg-column flex-xl-column flex-nowrap flex-sm-nowrap flex-md-nowrap flex-lg-nowrap flex-xl-nowrap justify-content-between justify-content-sm-between justify-content-md-between justify-content-lg-between justify-content-xl-between">

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.php">PractiBot</a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="index.php">Accueil</a></li>
                    <li><a class="nav-link scrollto" href="pages/form.php?form=2">Se diagnostiquer</a></li>
                    <li>
                        <button type="button" class="btn btnPrimary" data-bs-toggle="modal" data-bs-target="#form">
                            Se connecter
                        </button>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Popup formulaires ======= -->
    <div class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Espace praticien</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center flexRow">
                    <div class="container text-center">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="borderRight">
                                    <p>Vous souhaitez vous inscrire ?</p>
                                    <a href="pages/signup.php" class="btn btnPrimary">S'inscrire</a>
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <p>Vous possédez déjà un compte praticien ?</p>
                                    <a href="pages/login.php" class="btn btnPrimary">Connexion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    <main id="main">    
    
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center ">
        <div class="container">
            <h1>Bienvenue sur Practibot</h1>
            <h2>Le site internet capable de réaliser les premiers diagnostiques à distance !</h2>
        </div>
    </section><!-- End Hero -->

        <!-- ======= Présentation Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div
                        class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox mb-4"></a>
                    </div>

                    <div
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h3>Qu'est-ce-que Practibot ?</h3>
                        <p>
                            Practibot est un site internet permettant de faire des diagnostiques à distance afin d'aider le personnel du médical dans la prise en charge des patients.
                        </p>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="">Etape 1 :</a></h4>
                            <p class="description">
                                Choisir la spécialité souhaitée afin d'obtenir le résultat le plus exact possible
                            </p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-hospital-user"></i></div>
                            <h4 class="title"><a href="">Etape 2 :</a></h4>
                            <p class="description">
                                Remplir le formulaire avec vos symptômes ainsi que vos informations personnelles
                            </p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-user-md"></i></div>
                            <h4 class="title"><a href="">Etape 3 :</a></h4>
                            <p class="description">
                                Les résultats peuvent être envoyés à des professionnels si vous le souhaitez pour aider la prise en charge
                            </p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row spaceBetween">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="fas fa-user-md"></i>
                            <span data-purecounter-start="0" data-purecounter-end="845" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Professionnels du médical partenaires</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="far fa-hospital"></i>
                            <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Départements partenaires</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fas fa-flask"></i>
                            <span data-purecounter-start="0" data-purecounter-end="3258" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Diagnostiques déjà réalisés</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Se diagnostiquer</h2>
                    <p>
                        Ce formulaire permet de vous faire un auto-diagnostique de vos problèmes gériatriques. Ces
                        résultats seront
                        communiqués à votre médecin gériatre qui vous attribuera un rendez-vous en fonction de vos
                        symptômes
                    </p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <a href="pages/form.php?form=2">
                            <div class="black icon-box">
                                <div class="icon"><i class="fas fa-pills"></i></div>
                                <h4>Médecine Générale</h4>
                                <p>Toux ? Maux de tête ? Faites un diagnostique de vos symptômes</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <a href="pages/form.php?form=2">                        
                            <div class="black icon-box">
                                <div class="icon"><i class="fas fa-hospital-user"></i></div>
                                <h4>Gériatrie</h4>
                                <p>Problèmes de mémoire ? Problèmes moteurs ? Faites un diagnostique gériatrique</p>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <a href="pages/form.php?form=2">
                            <div class="black icon-box">
                                <div class="icon"><i class="fas fa-heartbeat"></i></div>
                                <h4>Cardiologie</h4>
                                <p>Problèmes lors d'un effort ? Fatigue intense ? Faites un diagnostique cardiaque</p>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->
       
    </main><!-- End #main -->

    <?php
        include "components/footer.html";
        include "components/buttonTop.html";
    ?>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>