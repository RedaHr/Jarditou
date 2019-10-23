<?php
// Du Moment ou l'Utilisateur N'est pas Admin Le Button AJOUT Ne s'affichera Pas
if ($this->session->userdata('admin')) { ?>


    <!-- Début de la Page Modif -->

    <?php $title = 'Ajouter un produit'; ?>

    <?php include 'head.php'; ?>
    <!-- Ajouter du CSS ICI -->

    <!-- HEADER, NAVBAR & CAROUSEL -->
    <?php include 'navBar.php'; include 'carousel.php'; ?>
    <!-- ========================= -->


    <br>
    <div class="form-group container">
        <?php echo form_open_multipart(); ?>


        <div class="input-group col-ml">
            <div class="input-group-prepend">
                <label class="input-group-text">Catégorie : </label>
            </div>

            <select class="form-control browser-default custom-select-form-alt" name="pro_cat_id">
                <?php foreach ($cat as $categorie) { ?>
                    <option value="<?= $categorie->cat_id; ?>"><?= $categorie->cat_id . " - " . $categorie->cat_nom; ?></option>
                    <?php
                } ?>
            </select>

        </div>
        <br>

        <!-- Affichage du message d'erreur Réfèrence -->
        <?php echo form_error('pro_ref'); ?>
        <div class="input-group col-ml">
            <div class="input-group-prepend">
                <label class="input-group-text">Référence : </label>
            </div>

            <input class="form-control" type="text" name="pro_ref" value="<?php echo set_value('pro_ref'); ?>">
        </div>
        <br>

        <!-- Affichage du message d'erreur Libellé -->
        <?php echo form_error('pro_libelle'); ?>
        <div class="input-group col-ml">
            <div class="input-group-prepend">
                <label class="input-group-text">Libellé : </label>
            </div>

            <input class="form-control" type="text" name="pro_libelle" value="<?php echo set_value('pro_libelle'); ?>">
        </div>
        <br>

        <!-- Affichage du message d'erreur Description -->
        <?php echo form_error('pro_description'); ?>
        <div class="input-group col-ml">
            <div class="input-group-prepend">
                <label class="input-group-text">Description : </label>
            </div>

            <textarea class="form-control ml-textarea" type="text" name="pro_description" rows="3"
                      value="<?php echo set_value('pro_description'); ?>"> </textarea>
        </div>
        <br>

        <!-- Affichage du message d'erreur Prix -->
        <?php echo form_error('pro_prix'); ?>
        <div class="input-group col-ml">
            <div class="input-group-prepend">
                <label class="input-group-text">Prix : </label>
            </div>

            <input class="form-control" type="text" name="pro_prix" value="<?php echo set_value('pro_prix'); ?>">
        </div>
        <br>

        <!-- Affichage du message d'erreur Stock -->
        <?php echo form_error('pro_stock'); ?>
        <div class="input-group col-ml">
            <div class="input-group-prepend">
                <label class="input-group-text">Stock Actuel : </label>
            </div>

            <input class="form-control" type="text" name="pro_stock" value="<?php echo set_value('pro_stock'); ?>">
        </div>
        <br>

        <!-- Affichage du message d'erreur Couleur -->
        <?php echo form_error('pro_couleur'); ?>
        <div class="input-group col-ml">
            <div class="input-group-prepend">
                <label class="input-group-text">Couleur : </label>
            </div>

            <input class="form-control" type="text" name="pro_couleur" value="<?php echo set_value('pro_couleur'); ?>">
        </div>
        <br>

        <!-- Pour le Champ File -->
        <div class="input-group col-ml">
            <span class="input-group-prepend">
                <span class="input-group-text">Télécharger</span>
            </span>
            <div class="custom-file">
                <input type="file" name="pro_photo" id="photo" class="custom-file-input">

                <label for="pro_photo" class="custom-file-label">Photo du produit :</label>
            </div>
        </div>
        <br>


        <fieldset class="form-group col-ml">
            <!-- Affichage Boutton Radio -->
            <div class="alert alert-success" role="alert">
                <label for="pro_bloque">Est-ce que ce produit est bloqué à la vente pour le moment ?</label><br>

                <label><input type="radio" name="pro_bloque"
                              value="1" <?php echo set_radio('pro_bloque', '1', TRUE); ?>>
                    Oui
                </label>
                <label><input type="radio" name="pro_bloque" value="0" <?php echo set_radio('pro_bloque', '0'); ?>>
                    Non
                </label>
            </div>
        </fieldset>


        <!-- Bouton Ajouter -->
        <div class="d-flex justify-content-center">
            <div class="row">
            <button type="submit" class="btn tempting-azure-gradient btn-rounded fs-it-btn border-0 btn-sm">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    <span class="fs-it-btn-vertical-line"></span>
                    Ajouter
                </button>

                <!-- Bouton Retour -->
                <a class="btn aqua-gradient fs-it-btn btn-rounded border-0 btn-sm" href="<?php echo site_url('produits/liste'); ?>">
                    <i class="fa fa-undo" aria-hidden="true"></i>
                    <span class="fs-it-btn-vertical-line"></span>
                    Retour
                </a>
            </div>
        </div>


        <?php echo form_close(); ?>
    </div>

    <?php include 'script.php'; ?>
    <!-- Redirection Vers l'accueil si l'utilisateur n'est pas ADMIN -->
<?php } else {
    redirect('affichage/accueil');
} ?>