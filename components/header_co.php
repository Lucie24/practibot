<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="praticien.php">PractiBot</a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto" href="praticien.php">Tableau de bord</a></li>
                <li><a class="nav-link scrollto" href="profil.php">Mon profil</a></li>
                <li>
                    <button type="button" class="btn btnPrimary" data-bs-toggle="modal" data-bs-target="#popup">
                        Se déconnecter
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
                        <p>Souhaitez-vous vous déconnecter ?</p>
                        <div class="col">
                            <a href="../components/deconnexion.php" class="btn btnPrimary">Oui</a>
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

