</head>

<body>

<header>
    <!-- LOGO JARDITOU -->
    <!--    <img src="-->
    <?php //echo base_url('/assets/img/jarditou_logo.png'); ?><!--" class="animated fadeInRight img-fluid"-->
    <!--         alt="jarditou logo" width="250" height="83">-->

    <!-- NAVBAR -->

    <!-- BARE DE NAVIGATION -->
    <div id="navbar" class="container-fluid">
        <div class="container nav-fill w-100">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
                <a class="navbar-brand" href="<?php echo site_url('affichage/accueil'); ?>">
                    <img src="<?php echo base_url('/assets/img/jarditou_logo.png'); ?>" class="animated fadeInRight img-fluid" alt="jarditou logo" width="150" height="42"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto w-100 justify-content-center px-3">
                        <li class="nav-item">
                            <a class="btn-block z-depth-1a nav-link text-white"
                               href="<?php echo site_url('produits/liste'); ?>">
                                <i class="fas fa-dolly"></i>
                                <span class="fs-it-btn-vertical-line"></span>
                                Liste des produits </a>
                        </li>
                        <!-- ============================================= MESSAGE DE CONNECTION ============================================ -->

                        <?php
                        if ($this->session->login) { ?>
                            <li class="nav-item">
                                <!-- Button DECONNEXION -->

                                <div class="white-text font-weight-bold"><?php echo $this->session->message; ?></div>
                                <a class="text-danger font-weight-bold"
                                   href="<?php echo site_url('connexion/deconnexion'); ?>">
                                    <i class="fa fa-sign-out-alt" aria-hidden="true"></i>
                                    Deconnexion</a>

                            </li>

                        <?php } else { ?>
                            <li class="nav-item align-center">
                                <?php include 'login.php'; ?>
                            </li>
                        <?php } ?>

                        <!-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
                        <!-- Button Panier -->

                        <?php if (isset($this->session->login)) { // Si l'Utilisateur N'est pas CONNECTER le PANIER ne s'affiche pas ?>
                            <li class="nav-item">
                                <a class="text-white font-weight-bold"
                                   href="<?php echo site_url('boutique/cAffiche'); ?>">
                                    <i class="fas fa-shopping-cart"></i>
                                    Panier</a>
                            </li>

                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- ========================================================================================= -->
    <!-- Fermeture NAVBAR -->
</header>
