<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="../index.php">PractiBot</a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="../index.php">Accueil</a></li>
                <li><a class="nav-link scrollto" href="form.php">Se diagnostiquer</a></li>
                <li>
                    <button type="button" class="btn btnPrimary" data-bs-toggle="modal" data-bs-target="#popup">
                        Se connecter
                    </button>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- navbar -->
    </div>
</header><!-- End Header -->

<!-- ======= Popup formulaires ======= -->
<div class="modal fade" id="popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <a href="signup.php" class="btn btnPrimary">S'inscrire</a>
                            </div>
                        </div>
                        <div class="col">
                            <div>
                                <p>Vous possédez déjà un compte praticien ?</p>
                                <a href="login.php" class="btn btnPrimary">Connexion</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

