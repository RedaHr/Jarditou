<!--  NAVBAR 1  -->
<a href="#" class="logotop col-xs-5 col-sm-4 col-lg-3"><img class="img-fluid img-responsive" src="<?php echo base_url('assets/img/Charte/HEADER/logo_village_green.png'); ?>"></a>

<div class="top offset-sm-6 col-sm-6">
    <a tabindex="0" class="btn btn-default navbar-btn" data-toggle="popover2" role="button" data-container="body"
       data-placement="bottom" data-trigger="focus">Infos</a>
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

    <a tabindex="0" class="btn btn-default navbar-btn" data-toggle="popover" role="button" data-container="body" data-placement="bottom" data-trigger="click">Espace client</a>
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
            <a type="button" class="btn btn-danger" href="https://dev.amorce.org/jmercerol/fil_rouge/index.php/main/inscription">S'inscrire</a>
            Plus d'informations

        </div>
    </div>

    <a href=""><img src="<?php echo base_url('assets/img/Charte/HEADER/picto_panier.png'); ?>"></a>
</div>

<!--    <a href="#"><img src="--><?php //echo base_url('assets/img/Charte/HEADER/picto_panier.png'); ?><!--" alt="Panier"-->
<!--                     title="logo d'un charriot, accès au panier"></a>-->
<!--    <a href="#"><img src="--><?php //echo base_url('assets/img/Charte/HEADER/picto_pays.png'); ?><!--" alt="Langue française"-->
<!--                     title="image du drapeau français, langue du site"></a>-->
    <!-- Fin ul.col-12 -->
</div>    <!-- Fin div .collapse -->
</nav>    <!-- Fin #navone -->