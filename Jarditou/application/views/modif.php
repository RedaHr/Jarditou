<?php
// Du Moment ou l'Utilisateur N'est pas Admin LA PAge Modification Ne s'affichera Pas 
if ($this->session->userdata('admin')) { ?>


    <!-- Début de la Page Modif -->
    <?php $title = 'Modifier le produit'; ?>

    <?php include 'head.php'; ?>
    <!-- Ajouter du CSS ICI -->

    <!-- HEADER, NAVBAR & CAROUSEL -->
    <?php include 'navBar.php'; include 'carousel.php'; ?>
    <!-- ========================= -->

    <?php echo form_open_multipart(); ?>
    <?php foreach ($produits as $row) { ?>

        <br>
        <div class="form-group container">

        <!-- Affichage de l'IMAGE -->
        <div class="input-group  col-md-12">
            <div class="input-group-prepend">
                <label class="input-group-text">Image du produit :</label>
            </div>
            <img src="<?php echo base_url("assets/img/" . $row->pro_id . '.' . $row->pro_photo) ?>" width="250">
        </div><br>
    <?php } ?>

    <div class="input-group col-md-12">
        <div class="input-group-prepend">
            <label class="input-group-text">Catégorie : </label>
        </div>
        <!-- Affichage du message d'erreur Catégorie  type="hidden" -->
        <?php echo form_error('pro_cat_id'); ?>
        <input class="form-control browser-default custom-select-form-alt" value="<?php echo $row->pro_cat_id; ?>"
               disabled>
    </div><br>

    <div class="input-group col-md-12">
        <div class="input-group-prepend">
            <label for="pro_ref" class="input-group-text">Référence :</label>
        </div>
        <input class="form-control" type="text" name="pro_ref" value="<?php echo $row->pro_ref; ?>">
    </div><br>

    <div class="input-group col-md-12">
        <div class="input-group-prepend">
            <label for="pro_libelle" class="input-group-text">Libellé :</label>
        </div>
        <input class="form-control" type="text" name="pro_libelle" value="<?php echo $row->pro_libelle; ?>">
    </div><br>

    <div class="input-group col-md-12">
        <div class="input-group-prepend">
            <label for="pro_description" class="input-group-text">Description :</label>
        </div>
        <textarea name="pro_description" class="md-textarea form-control"
                  rows="3"><?php echo $row->pro_description; ?></textarea>
    </div><br>

    <div class="input-group has-success col-md-12">
        <div class="input-group-prepend">
            <label for="pro_prix" class="input-group-text">Prix :</label>
        </div>
        <input type="text" name="pro_prix" class="form-control" step="0.01" value="<?php echo $row->pro_prix; ?>">
        <div class="input-group-prepend">
            <span class="input-group-text">€</span>
        </div>
    </div><br>

    <div class="input-group col-md-12">
        <div class="input-group-prepend">
            <span for="pro_stock" class="input-group-text">Stock actuel :</span>
        </div>
        <input type="text" class="form-control" name="pro_stock" value="<?php echo $row->pro_stock; ?>">
    </div><br>

    <div class="input-group col-md-12">
        <div class="input-group-prepend">
            <span for="pro_couleur" class="input-group-text">Couleur :</span>
        </div>
        <input type="text" class="form-control" name="pro_couleur" value="<?php echo $row->pro_couleur; ?>">
    </div><br>

    <!-- Pour le Champ File -->
    <div class="input-group col-md-12">
            <span class="input-group-prepend">
                <span class="input-group-text">Télécharger</span>
            </span>
        <div class="custom-file">
            <input type="file" name="pro_photo" id="photo" class="custom-file-input">

            <label for="pro_photo" class="custom-file-label">Photo du produit :</label>
        </div>
    </div><br>

    <!-- date ajout -->
    <div class="input-group col-md-12">
        <div class="input-group-prepend">
            <span for="pro_d_ajout" class="input-group-text">Date d'ajout :</span>
        </div>
        <input type="text" class="form-control" name="pro_d_ajout" value="<?php echo $row->pro_d_ajout; ?>" readonly>
    </div><br>
    <!-- date Modif -->
    <div class="input-group col-md-12">
        <div class="input-group-prepend">
            <span for="pro_d_modif" class="input-group-text">Date de modification :</span>
        </div>
        <input type="text" class="form-control" name="pro_d_modif" value="<?php echo $row->pro_d_modif; ?>" readonly>
    </div><br>

    <fieldset class="form-group col-md-12">
        <!-- Affichage Boutton Radio -->
        <div class="alert alert-success" role="alert">
            <label for="pro_bloque">Est-ce que ce produit est bloqué à la vente pour le moment ?</label><br>
            <?php if ($row->pro_bloque == 1) { ?>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="materialInline1" name="pro_bloque"
                           value="1" <?php echo set_radio('pro_bloque', '1', TRUE); ?>>
                    <label class="form-check-label" for="materialInline1">Oui</label>
                </div>

                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="materialInline2" name="pro_bloque"
                           value="0" <?php echo set_radio('pro_bloque', '0'); ?>>
                    <label class="form-check-label" for="materialInline2">Non</label>
                </div>
            <?php } else { ?>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="materialInline1" name="pro_bloque"
                           value="1" <?php echo set_radio('pro_bloque', '1'); ?>>
                    <label>Oui</label>
                </div>

                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" id="materialInline2" name="pro_bloque"
                           value="0" <?php echo set_radio('pro_bloque', '0', TRUE); ?>>
                    <label> Non</label>
                </div>
            <?php } ?>
        </div>
    </fieldset>

    <!-- Bouton Modifier -->
    <div class="d-flex justify-content-center">

        <a  class="btn btn-primary btn-rounded border-primary btn-sm"
            href="<?php echo site_url('produits/ajout'); ?>" class="ripple" alt="Ajouter un produit">
            <i class="fa fa-plus" aria-hidden="true"></i>
            <span class="fs-it-btn-vertical-line"></span>
            Ajouter un produit
        </a>

        <button type="submit" class="btn btn-rounded btn-success border-success btn-sm">
            <i class="fas fa-check" aria-hidden="true"></i>
            <span class="fs-it-btn-vertical-line"></span>
            Valider
        </button>

        <!-- Bouton Supprimer -->
        <a class="btn btn-danger btn-rounded border-danger btn-sm"
           href="<?php echo site_url('produits/supprimer/' . $row->pro_id); ?>"
           onclick="return confirm('Êtes-vous sur de vouloir supprimer ce produit ?')">
            <i class="fas fa-trash" aria-hidden="true"></i>
            <span class="fs-it-btn-vertical-line"></span>
            Supprimer</a>

        <!-- Bouton Retour -->
        <a class="btn btn-info btn-rounded border-info btn-sm"
           href="<?php echo site_url('produits/details/' . $row->pro_id); ?>">
            <i class="fa fa-undo" aria-hidden="true"></i>
            <span class="fs-it-btn-vertical-line"></span>
            Retour
        </a>

    </div>
    </div>
    <?php echo form_close(); ?>

    <?php include 'script.php'; ?>
    <!-- Redirection Vers l'accueil si l'utilisateur n'est pas ADMIN -->
<?php } else {
    redirect('affichage/accueil');
} ?>