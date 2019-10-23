<?php $title = 'Mon panier'; ?>

<?php include 'head.php'; ?>
    <!-- Ajouter du CSS ICI -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/panier.css'); ?>">
    <!-- HEADER, NAVBAR & CAROUSEL -->
<?php include 'navBar.php';
include 'carousel.php'; ?>
    <!-- ========================= -->

    <div class="container">
        <h1>Mon panier</h1>
        <hr>
        <?php
        if ($this->session->panier != NULL) // si la session panier est ouverte
        { ?>
            <table id="cart" class="table table-hover table-condensed heavy-rain-gradient"">
            <thead class=" text-center">
            <tr>
                <th style="width:10%">Photo</th>
                <th style="width:58%">Produit</th>
                <th style="width:8%">Prix</th>
                <th style="width:8%">Quantité</th>
                <th style="width:8%" class="text-center">Prix total</th>
                <th style="width:8%"></th>
            </tr>
            </thead>

            <tbody>
            <?php
            $total = 0;
            foreach ($this->session->panier as $produit) { ?>
                <tr>
                <tr>

                    <!--            DETAIL DU PRODUIT LIBELLE ET DESCRIPTION -->
                    <td data-th="Photo">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs">
                                <img src="<?php echo base_url("assets/img/" . $produit['pro_id'] . '.' . $produit['pro_photo']); ?>"
                                     alt="..." width="100px" height="100px" class="img-responsive">
                            </div>
                        </div>
                    </td>
                    <td data-th="Produit">
                        <div class="row">
                            <div class="col-sm-10">
                                <h4 class="nomargin"><?php echo $produit['pro_libelle']; ?></h4>
                                <p><?php echo $produit['pro_description']; ?></p>
                            </div>
                        </div>
                    </td>

                    <!--      PRIX DU PRODUIT      -->
                    <td data-th="Prix"><?php echo str_replace('.', ',', $produit['pro_prix']); ?> €</td>

                    <!--      LA QUENTITE DU PRODUIT      -->
                    <td data-th="Quantité">
                        <div>
                            <div class="text-center">
                                <a href="<?php echo site_url('boutique/qtemoins/' . $produit['pro_id']); ?>"
                                   type="button" role="button"> <i class="fas fa-minus-circle"></i></a>
                                <?php echo $produit['pro_qte'] ?>
                                <a href="<?php echo site_url('boutique/qteplus/' . $produit['pro_id']); ?>"
                                   type="button" role="button"><i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </td>

                    <!--      LE PRIX DU PRODUIT      -->
                    <td data-th="Prix-total" class="text-center">
                        <?php echo str_replace('.', ',', ($produit['pro_qte'] * $produit['pro_prix'])); ?> €
                    </td>

                    <!--  EFFACER LE PRODUIT -->
                    <td class="actions text-center" data-th="">
                        <?php $total += $produit['pro_qte'] * $produit['pro_prix']; ?>
                        <a href="<?php echo site_url('boutique/effaceProduit/' . $produit['pro_id']); ?>"
                           class="text-danger"><i class="fas fa-trash"></i> </a>
                    </td>
                </tr>

            <?php } ?>

            </tbody>

            <tfoot>
            <tr>

                <td>
                    <!--           TD vide pour mettre les boutton en BAS du description produit -->
                </td>
                <!--           TD vide pour mettre les boutton en BAS du description produit -->
                <td>
                    <!--           TD vide pour mettre les boutton en BAS du description produit -->
                </td>

                <!--        TOTAL DE LA COMMANDE            -->
                <td colspan="2" class="hidden-xs"></td>

                <td class="hidden-xs text-center">
                    <strong>Total : <?php echo str_replace('.', ',', $total); ?> €</strong>
                </td>

            </tr>
            </tfoot>
            </table>

            <!--            Boutton Retour Suppression et Validation    -->
            <div class="d-flex justify-content-between">
                <td>
                    <a href="<?php echo site_url('produits/liste'); ?>"
                       class="btn btn-rounded btn-warning btn-sm border-warning">
                        <i class="fas fa-backspace"></i> <span class="fs-it-btn-vertical-line"> </span>
                        Continue votre commande
                    </a>
                </td>

                <td>
                    <a href="<?php echo site_url('boutique/efface'); ?>"
                       class="btn btn-rounded btn-danger btn-sm border-danger">
                        <i class="fas fa-eraser"></i> <span class="fs-it-btn-vertical-line"> </span>
                        Supprimer votre panier
                    </a>
                </td>

                <td>
                    <a href="#" class="btn btn-rounded btn-success btn-sm border-success">Valider votre commande
                        <span class="fs-it-btn-vertical-line"> </span> <i class="far fa-thumbs-up"></i>
                    </a>
                </td>
            </div>

            <?php
        } else //si session panier pas ouverte : on retrourne au catalogue
        { ?>
            <div class="alert alert-danger">Votre panier est vide. Pour le remplir, vous pouvez visiter notre
                <a href="<?php echo site_url('produits/liste'); ?>">boutique</a>
            </div> <?php
        } ?>
    </div>

<?php include 'script.php'; ?>