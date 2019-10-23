<?php $title = 'Inscrivez-vous'; ?>

<?php include 'head.php'; ?>
<!-- Ajouter du CSS ICI -->
<!-- Personnal stylesheet CSS -->
<!-- <link rel="stylesheet" href="<?php //echo base_url('assets/css/inscription.css'); 
                                    ?>"> -->

<!-- HEADER, NAVBAR & CAROUSEL -->
<?php include 'navBar.php'; include 'carousel.php'; ?>
<!-- ========================= -->

<!-- ============================================= FORMULAIRE D'INSCRIPTION ============================================ -->

<br>

<?php if (!empty(validation_errors())) { ?>

    <div class="text-center font-weight-bold mb-4 alert alert-danger alert-dismissible fade show"
         role="alert"><?php echo validation_errors(); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php } ?>

<div class='col-md-4 col-md-offset-4 container-fluid' id='login'>
    <section id='#' class='login'>
        <article>
            <?php echo form_open('connexion/inscription'); ?>

            <!-- Nom D'utilisateur -->
            <div class='input-group'>
                <div class='input-group'>
                    <span class='input-group-text'><i class='fa fa-user'> </i></span>
                    <input type='text' class='form-control' name='pseudo' id='pseudo' placeholder="Nom d'utilisateur">
                </div>
            </div>
            <br>
            <!-- Adresse Email -->
            <div class='form-group'>
                <div class='input-group'>
                    <span class='input-group-text'><i class='fa fa-envelope'> </i></span>
                    <input type='email' class='form-control' name='mail' id='mail' placeholder='Adresse mail'>
                </div>
                <br>
                <!-- Mot de passe -->
                <div class='form-group'>
                    <div class='input-group'>
                        <span class='input-group-text'><i class='fa fa-key'> </i></span>
                        <input type='password' class='form-control' name='mot_de_passe' id='password' placeholder='Choisisser un mot de passe' pattern='.{6,}' required title='6 caracteres minimum'>
                    </div>
                </div>

                <!-- Confirmer le passe -->
                <div class='form-group'>
                    <div class='input-group'>
                        <span class='input-group-text'><i class='fa fa-key'> </i></span>
                        <input type='password' class='form-control' name='passwordC' id='passwordC' placeholder='Confirmer votre mot de passe' pattern='.{6,}' required title='6 caracteres minimum'>
                    </div>
                </div>
                <br>

                <!-- Bouton Confirmer -->
                <div class="row text-center">
                    <div class="col-md-12">
                        <button type="submit" value="Login" class="btn blue-gradient border-0 fs-it-btn btn-sm">
                            <i class="fa fa-sign-in-alt" aria-hidden="true"></i>
                            <span class="fs-it-btn-vertical-line"></span>
                            S'inscrire
                        </button>

                        <!-- Bouton Retour -->
                        <a class="btn aqua-gradient fs-it-btn border-0 btn-sm" href="<?php echo site_url('affichage/accueil'); ?>">
                            <i class="fa fa-undo" aria-hidden="true"></i>
                            <span class="fs-it-btn-vertical-line"></span>
                            Retour
                        </a>
                    </div>
                </div>
                <!-- Fermeture du DIV Button Login -->

                <?php echo form_close(); ?>
        </article>

        <hr />
        <div class="clear text-center">
            <i class="fas fa-info-circle"></i> Êtes-vous déja membre ? Génial <i class="far fa-thumbs-up"></i>
            <a class="font-weight-bold" id="inscrire" href="<?php echo site_url('affichage/accueil'); ?>">Inscrivez-vous</a> <!-- Redirection vers le Formulaire d'inscription -->
        </div>

    </section>
</div>
<!-- ========================================================================================= -->


<?php include 'script.php'; ?>