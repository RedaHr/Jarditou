</head>
<body>

<!-- HEADER, NAVBAR & CAROUSEL -->
<div class="main container">
    <header class="row">
        <a href="#" class="logotop col-xs-5 col-sm-4 col-lg-3"><img class="img-fluid img-responsive" src="<?php echo base_url('assets/img/Charte/HEADER/logo_village_green.png'); ?>"></a>
        <div class="top offset-sm-6 col-sm-6">
            <a tabindex="0" class="espClient" data-toggle="popover2" role="button" data-container="body" data-placement="bottom" data-trigger="focus">Infos</a>
            <div id="popover2-content" class="row" style="display: none">
                <div class="popForm infos">
                    <p>Les villageois</p>
                    <ul>
                        <li><a class="info" href="#">Ils vous conseillent</a></li>
                        <li><a class="info" href="">A votre agenda</a></li>
                        <li><a class="info" href="">On parle de nous</a></li>
                    </ul>
                </div>
            </div>

            <a tabindex="0" class="espClient" data-toggle="popover" role="button" data-container="body" data-placement="bottom" data-trigger="click">Espace client</a>
            <div id="popover-content" class="row" style="display: none">
                <div class="popForm popLeft">
                    <span>Etes-vous déjà client chez nous ?</span>
                    <form action="#" method="post" accept-charset="utf-8">

                        <div class="form-group">
                            <label for="user"></label>
                            <input type="email" class="form-control" id="user" name="user" placeholder="Adresse E-mail">
                            <label for="mdp"></label>
                            <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de passe">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="rememberMe" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Rester connecté</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger">Se connecter maintenant</button>
                        Vous avez oublié votre mot de passe ?
                    </form>
                </div>
                <div class="popForm popRight">
                    <span>Vous n'êtes pas client chez nous ?</span>

                    <p>En tant que client Village Green
                        vous pouvez suivre vos envois,
                        lire des tests produits exclusifs,
                        évaluer des produits, déposer
                        des petites annonces, gérer
                        vos chèques-cadeaux, devenir
                        partenaire et bien plus encore.</p>
                    <a type="button" class="btn btn-danger" href="#">S'inscrire</a>
                    Plus d'informations

                </div>
            </div>

            <a href="<?php echo site_url('assets/img/Charte/HEADER/picto_panier.png'); ?>"><img src="<?php echo base_url('assets/img/Charte/HEADER/picto_panier.png'); ?>"></a>
        </div>


        <nav class="navbar navbar-expand-md navbar-dark bg-dark col-sm-12 d-flex">
            <button class="navbar-toggler offset-xs-10 col-xs-2 offset-sm-10 col-sm-2" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav mr-auto offset-sm-4 col-sm-8 d-flex justify-content-around">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Produits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link service" href="">Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link help" href="">Aide</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link about" href="">A propos</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="bottom-header d-none d-md-block col-sm-12">
            <ul>
                <li class="nav-item dropdown">
                    <!--                            <a class="nav-link dropdown-toggle prems" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                                    Guit/Bass</a>
                                                <div class="dropdown-menu">-->
                    <!-- <a tabindex="0" class="btn btn-default navbar-btn prems" data-toggle="popover3" role="button" data-container="body" data-placement="bottom" data-trigger="focus">Guit/Bass</a>
                    <div id="popover3-content" class="dropdown-menu" style="display: none">
                        <div class="popList"> -->
                    <a class="nav-link dropdown-toggle prems" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Guit/Bass</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Guitares électriques</a>
                        <a class="dropdown-item" href="#">Guitares classiques</a>
                        <a class="dropdown-item" href="#">Guitares Acoustiques</a>
                        <a class="dropdown-item" href="#">Basses Electriques</a>
                        <a class="dropdown-item" href="#">Guitares Semi-Acoustiques</a>
                        <a class="dropdown-item" href="#">Ukulélés</a>
                        <a class="dropdown-item" href="#">Autres instruments <br>à cordes pincées</a>
                    </div>
                    <!-- </div> -->
                </li>
                <li class="nav-item dropdown">
                    <!-- <a tabindex="0" class="btn btn-default navbar-btn prems" data-toggle="popover4" role="button" data-container="body" data-placement="bottom" data-trigger="focus">Batteries</a>
                    <div id="popover4-content" class="dropdown-menu" style="display: none">
                        <div class="popList"> -->
                    <a class="nav-link dropdown-toggle prems" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Batteries</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Batteries accoustiques</a>
                        <a class="dropdown-item" href="#">Batteries Electroniques</a>
                    </div>
                    <!-- </div> -->
                </li>
                <li class="nav-item dropdown">
                    <!-- <a tabindex="0" class="btn btn-default navbar-btn prems" data-toggle="popover5" role="button" data-container="body" data-placement="bottom" data-trigger="focus">Claviers</a>
                    <div id="popover5-content" class="dropdown-menu" style="display: none">
                        <div class="popList"> -->
                    <a class="nav-link dropdown-toggle prems" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Claviers</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="https://dev.amorce.org/jmercerol/fil_rouge/index.php/products/liste?cat=9">Claviers arrangeurs</a>
                        <a class="dropdown-item" href="https://dev.amorce.org/jmercerol/fil_rouge/index.php/products/liste?cat=8">Claviers maîtres</a>
                    </div>
                    <!-- </div> -->
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle prems" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Studio</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="https://dev.amorce.org/jmercerol/fil_rouge/index.php/products/liste?cat=15">Consoles de mixage</a>
                        <a class="dropdown-item" href="#!">Action</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle prems" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Sonos</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="https://dev.amorce.org/jmercerol/fil_rouge/index.php/products/liste?cat=17">Enceintes</a>
                        <a class="dropdown-item" href="#!">Another action</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle prems" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Eclairage</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#!">Action</a>
                        <a class="dropdown-item" href="#!">Another action</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle prems" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        DJ</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#!">Action</a>
                        <a class="dropdown-item" href="#!">Another action</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle prems" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Cases</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#!">Action</a>
                        <a class="dropdown-item" href="#!">Another action</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle prems" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Accessoires</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#!">Action</a>
                        <a class="dropdown-item" href="#!">Another action</a>
                    </div>
                </li>
            </ul>
        </div>
        <a href="https://dev.amorce.org/jmercerol/fil_rouge/index.php/main/accueil" class="logo col-xs-5 col-sm-4 col-lg-3"><img class="img-fluid img-responsive" src="https://dev.amorce.org/jmercerol/fil_rouge/assets/img/logo.png"></a>
    </header>