<?php $title = 'Détail du produit'; ?>

<?php include 'head.php'; ?>
    <!-- Ajouter du CSS ICI -->

    <!-- HEADER, NAVBAR & CAROUSEL -->
<?php include 'navBar.php'; include 'carousel.php'; ?>
    <!-- ========================= -->


<?php echo form_open('boutique/cAjoutPanier/' . $produits->pro_id); ?>

    <br>
    <div class="form-group container">

        <input type="hidden" name="pro_id" value="<?= $produits->pro_id ?>">
        <!-- Affichage de l'IMAGE -->
        <div class="input-group  col-md-12">
            <div class="input-group-prepend">
                <label for="pro_photo" class="input-group-text">Image du produit :</label>
            </div>
            <input type="hidden" name="pro_photo" value="<?= $produits->pro_photo ?>">
            <img src="<?php echo base_url("assets/img/" . $produits->pro_id . '.' . $produits->pro_photo) ?>"
                 class="rounded-lg" width="200">
        </div>
        <br>


        <div class="input-group  col-md-12">
            <div class="input-group-prepend">
                <label for="pro_cat_id" class="input-group-text">Catégorie : </label>
            </div>
            <!-- Affichage du message d'erreur Catégorie  type="hidden" -->
            <?php echo form_error('pro_cat_id'); ?>
            <input class="form-control browser-default custom-select-form-alt"
                   value="<?php echo $produits->pro_cat_id; ?>" readonly>
        </div>
        <br>

        <div class="input-group col-md-12">
            <div class="input-group-prepend">
                <label for="pro_ref" class="input-group-text">Référence :</label>
            </div>
            <input class="form-control" type="text" name="pro_ref" value="<?php echo $produits->pro_ref; ?>" readonly>
        </div>
        <br>

        <div class="input-group col-md-12">
            <div class="input-group-prepend">
                <label for="pro_libelle" class="input-group-text">Libellé :</label>
            </div>
            <input class="form-control" type="text" name="pro_libelle" value="<?php echo $produits->pro_libelle; ?>"
                   readonly>
        </div>
        <br>

        <div class="input-group col-md-12">
            <div class="input-group-prepend">
                <label for="pro_description" class="input-group-text">Description :</label>
            </div>
            <textarea name="pro_description" class="md-textarea form-control" rows="5"
                      readonly> <?php echo $produits->pro_description; ?></textarea>
        </div>
        <br>

        <div class="input-group has-success col-md-12">
            <div class="input-group-prepend">
                <label for="pro_prix" class="input-group-text">Prix :</label>
            </div>
            <input type="text" name="pro_prix" class="form-control" step="0.01"
                   value="<?php echo $produits->pro_prix; ?>" readonly>
            <div class="input-group-prepend">
                <span class="input-group-text">€</span>
            </div>
        </div>
        <br>

        <div class="input-group col-md-12">
            <div class="input-group-prepend">
                <span for="pro_stock" class="input-group-text">Stock actuel :</span>
            </div>
            <input type="text" class="form-control" name="pro_stock" value="<?php echo $produits->pro_stock; ?>"
                   readonly>
        </div>
        <br>

        <div class="input-group col-md-12">
            <div class="input-group-prepend">
                <span for="pro_couleur" class="input-group-text">Couleur :</span>
            </div>
            <input type="text" class="form-control" name="pro_couleur" value="<?php echo $produits->pro_couleur; ?>"
                   readonly>
        </div>
        <br>
        <!-- Bouton Retour -->

        <div class="d-flex justify-content-center">
            <div class="row">

                <?php if (isset($this->session->login)) { // Si l'utilisateur est connecter on affiche que le bouton BACK & Add to CARD SHOPPING ?>

                    <a class="btn btn-info btn-rounded btn-sm border-info"
                       href="<?php echo site_url('produits/liste'); ?>">
                        <i class="fa fa-undo" aria-hidden="true"></i>
                        <span class="fs-it-btn-vertical-line"> </span>
                        Retour
                    </a>


                    <button type="submit" value="ajout" class="btn btn-secondary btn-rounded btn-sm border-secondary">
                        <i class="fas fa-plus-circle" aria-hidden="true"></i>
                        <span class="fs-it-btn-vertical-line"> </span>
                        Ajouter au Panier
                    </button>

                <?php } else { // Si l'utilisateur n'est pas connecter on affiche que le bouton BACK ?>

                    <a class="btn aqua-gradient btn-rounded btn-sm border-0"
                       href="<?php echo site_url('produits/liste'); ?>">
                        <i class="fa fa-undo" aria-hidden="true"></i>
                        <span class="fs-it-btn-vertical-line"> </span>
                        Retour
                    </a>
                <?php } ?>

            </div>
        </div>

    </div>
<?php echo form_close(); ?>

<?php include 'script.php'; ?>