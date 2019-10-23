 <!-- ============================================= FORMULAIRE DE CONNECTION ============================================ -->
 <section>

     <ul class="navbar navbar-nav">
         <li class="dropdown">

             <a href="#" class="text-white" data-toggle="dropdown"> <i class="fas fa-user-astronaut fa-2x"></i> </a> <!-- ICON astronaut  -->

             <ul class="dropdown-menu">
                 <div class="container">
                     <div class="row justify-content-center align-items-center">
                         <div class="card text-center">

                             <h4 class="card-header"><i class="fas fa-sign-in-alt"></i> Connectez-vous à
                                 <img src="<?php echo base_url('/assets/img/jarditou.png'); ?>" class="animated fadeInRight" alt="Jarditou" width="120" height="28">
                             </h4>
                             <div class="card-body">
                                 <?php echo form_open('connexion/login'); ?>

                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="form-group">
                                             <label>Pseudo</label>
                                             <div class="input-group">
                                                 <div class="input-group-prepend">
                                                     <span class="input-group-text"><i class="far fa-user" aria-hidden="true"></i></span> <!-- ICON USER  -->
                                                 </div>
                                                 <input type="text" class="form-control" name="pseudo" pattern=".{4,8}" title="Mini. 4 et Max. 8 caractéres" required="">
                                             </div>
                                         </div>
                                     </div>
                                 </div> <!-- Fermeture du DIV Pseudo -->

                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="form-group">
                                             <label>Mot de passe</label>
                                             <div class="input-group">
                                                 <div class="input-group-prepend">
                                                     <span class="input-group-text"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                                                 </div>
                                                 <input type="password" name="login_password" class="form-control" pattern=".{6,}" title="Min. 6 caracteres" required="">
                                             </div>
                                         </div>
                                     </div>
                                 </div> <!-- Fermeture du DIV Password -->

                                 <div class="row">
                                     <div class="checkbox checkbox-primary">
                                         <input id="checkbox_remember" type="checkbox" name="remember">
                                         <label for="checkbox_remember"> Se souvenir de moi</label>
                                     </div>
                                 </div> <!-- Fermeture du DIV Chekbox -->

                                 <div class="row">
                                     <div class="col-md-12">
                                         <button type="submit" value="Login" name="submit" class="btn blue-gradient fs-it-btn">
                                             <i class="fa fa-sign-in-alt" aria-hidden="true"></i>
                                             <span class="fs-it-btn-vertical-line"></span>
                                             Connexion
                                         </button>
                                     </div>
                                 </div>
                                 <!-- Fermeture du DIV Button Login -->

                                 <hr />
                                 <div class="clear text-center">
                                     <i class="fas fa-info-circle"></i> Vous êtes pas membre ? Pas de panique <i class="far fa-grin-beam-sweat"></i>
                                     <a class="font-weight-bold" id="inscrire" href="<?php echo site_url('connexion/inscription'); ?>">Inscrivez-vous</a> <!-- Redirection vers le Formulaire d'inscription -->
                                 </div>
                                 <?php echo form_close(); ?>
                             </div> <!-- Fermeture du DIV Card-Body -->

                         </div>
                     </div>
                 </div>
             </ul> <!-- Fermeture du UL Dropdown-Menu -->
         </li>
     </ul>

 </section>
 <!-- ========================================================================================= -->