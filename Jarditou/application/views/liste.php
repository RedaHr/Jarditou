<?php $title = 'Liste des produits'; ?>

<?php include 'head.php'; ?>
    <!-- Ajouter du CSS ICI -->

    <!-- HEADER, NAVBAR & CAROUSEL -->
<?php include 'navBar.php';
include 'carousel.php'; ?>
    <!-- ========================= -->

    <div class="d-flex justify-content-center">
        <h4 class="font-weight-bold"><i class="fas fa-box"></i>
            Liste des produits </h4>
<?php
// Du Moment ou l'Utilisateur N'est pas Admin Le Button AJOUT Ne s'affichera Pas
if ($this->session->userdata('admin')) { ?>
        <span class="fs-it-btn-vertical-line"></span>
        <a href="<?php echo site_url('produits/ajout'); ?>" class="h4 ripple text-default">
            <i class="fas fa-plus-circle"></i>
            Ajouter un produit
        </a>
    <?php } ?>
    </div>


    <h1 class="text-center font-weight-bold"></h1>

    <!-- Bouton Ajouter
<div class="text-center">
    <a class="btn primary-color fs-it-btn" href="<?php // echo site_url('produits/ajout');
    ?>">
        <i class="fa fa-plus" aria-hidden="true"></i>
        <span class="fs-it-btn-vertical-line"></span>
        Ajouter</a>
</div> -->


    <div id="liste" class="container">


        <table class="table table-bordered text-center heavy-rain-gradient">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Photo</th>
                <th scope="col">ID</th>
                <th scope="col">Référence</th>
                <th scope="col">Libellé</th>
                <th scope="col">Prix</th>
                <th scope="col">Stock</th>
                <th scope="col">Couleur</th>
                <th scope="col">Détails</th>

            </tr>
            </thead>
            <tbody>

            <?php
            foreach ($listes as $row) { ?>

                <tr class="align-middle">

                    <td><img src="<?php echo base_url('assets/img/' . $row->pro_id . '.' . $row->pro_photo); ?>"
                             class="rounded-lg" width="200" height="200" alt=""></td>
                    <td class="align-middle font-weight-bold"><?php echo $row->pro_id ?></td>
                    <td class="align-middle font-weight-bold"><?php echo $row->pro_ref ?></td>
                    <td class="align-middle font-weight-bold"><?php echo $row->pro_libelle ?></td>
                    <td class="align-middle font-weight-bold"><?php echo $row->pro_prix ?></td>
                    <td class="align-middle font-weight-bold"><?php echo $row->pro_stock ?></td>
                    <td class="align-middle font-weight-bold"><?php echo $row->pro_couleur ?></td>

                    <?php if ($this->session->userdata('admin')) {  // Si l'utilisateur est ADMIN  ?>
                        <td class="align-middle font-weight-bold"><a class="text-primary"
                                                                     href="<?php echo site_url('produits/modif/' . $row->pro_id); ?>"><i
                                        class="fas fa-info-circle fa-3x"></i></a>
                            <hr>
                            <?= form_open('boutique/cAjoutPanier/' . $row->pro_id); ?>
                            <input type="hidden" name="pro_prix" value="<?= $row->pro_prix ?>">
                            <input type="hidden" name="pro_id" value="<?= $row->pro_id ?>">
                            <input type="hidden" name="pro_libelle" value="<?= $row->pro_libelle ?>">
                            <input type="hidden" name="pro_photo" value="<?= $row->pro_photo ?>">
                            <input type="hidden" name="pro_description" value="<?= $row->pro_description ?>">
                            <button type="submit" value="Ajout" class="plus"><i
                                        class="fas fa-plus-circle text-secondary fa-3x"></i>
                            </button>
                            <?= form_close(); ?>
                        </td>

                    <?php } else {  // Si l'utilisateur n'est pas connecter  on affiche que les DETAILS
                        if (!isset($this->session->login)) { ?>
                            <td class="align-middle font-weight-bold"><a class="text-primary"
                                                                         href="<?php echo site_url('produits/details/' . $row->pro_id); ?>">
                                    <i class="fas fa-info-circle fa-3x"></i></a>
                            </td>
                        <?php } else { // Si l'utilisateur est CONNECTER on affiche les DETAILS et ADD to SHOPPING CARD ?>
                            <td class="align-middle font-weight-bold"><a class="text-primary"
                                                                         href="<?php echo site_url('produits/details/' . $row->pro_id); ?>">
                                    <i class="fas fa-info-circle fa-3x"></i></a>
                                <hr>
                                <?= form_open('boutique/cAjoutPanier/' . $row->pro_id); ?>
                                <input type="hidden" name="pro_prix" value="<?= $row->pro_prix ?>">
                                <input type="hidden" name="pro_id" value="<?= $row->pro_id ?>">
                                <input type="hidden" name="pro_libelle" value="<?= $row->pro_libelle ?>">
                                <input type="hidden" name="pro_photo" value="<?= $row->pro_photo ?>">
                                <input type="hidden" name="pro_description" value="<?= $row->pro_description ?>">
                                <button type="submit" value="Ajout" class="plus"><i
                                            class="fas fa-plus-circle text-secondary fa-3x"></i>
                                </button>
                                <?= form_close(); ?>
                            </td>
                        <?php }
                    } ?>
                </tr>
            <?php }
            ?>

            </tbody>


        </table>
    </div>

<?php
//if ($this->session->userdata('admin')) { ?>
    <!--    <!-- MENU FIX -->-->
    <!--    <main>-->
    <!--        <nav class="floating-menu">-->
    <!--            <ul class="main-menu">-->
    <!--                <!-- ACCUEIL -->-->
    <!--                <li>-->
    <!--                    <a href="--><?php //echo site_url('affichage/accueil'); ?><!--" class="ripple">-->
    <!--                        <i class="fas fa-home fa-lg"></i>-->
    <!--                    </a>-->
    <!--                </li>-->
    <!--                <!-- EDIT -->-->
    <!--                <li>-->
    <!--                    <a href="--><?php //echo site_url('produits/ajout'); ?><!--" class="ripple">-->
    <!--                        <i class="fa fa-plus"></i>-->
    <!--                    </a>-->
    <!--                </li>-->
    <!--            </ul>-->
    <!--            <div class="menu-bg"></div>-->
    <!--        </nav>-->
    <!--    </main>-->
    <!---->
<?php //} ?>
    <!--    <br>-->
<?php include 'footer.php' ?>

<?php include 'script.php'; ?>