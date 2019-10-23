<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boutique extends CI_Controller
{

    /**
     * \brief Méthode qui ajoute un produit dans le panier et affiche la page boutique
     * \details Lorsque l'utilisateur est connecté grâce à son \a login et qu'il transmet les données \data d'un produit,
     *          le \a panier est complété s'il existe ou créé sinon et la page de la boutique est chargée en affichant les informations \aView des produits.
     *          Si le produit existe déjà dans le \a panier, un message d'\a erreur est envoyé.
     * \param   aView    données issues du tableau produits de la base de données
     * \param   data    données transmises via la méthode post quand l'utilisateur ajoute un produit au panier (quantité, prix, id, libellé)
     * \param   panier    contenu du panier
     */

    public function cAjoutPanier($id)
    {
        if (isset($this->session->login)) //si l'utilisateur est connecté
        {
            if($this->input->post()) {
                $data = $this->input->post();
                $data['pro_qte'] = 1;
                if ($this->session->panier == null) //création du panier s'il n'existe pas
                {
                    $this->session->panier = array();
                    $tab = $this->session->panier;
                    //On ajoute le produit
                    array_push($tab, $data);
                    $this->session->panier = $tab;
                    redirect('boutique/cAffiche');
                }
                else //si le panier existe
                {
                    $tab = $this->session->panier;
                    $sortie = false;
                    foreach ($tab as $produit) //on cherche si le produit existe déjà dans le panier
                    {
                        if ($produit['pro_id'] == $id) {
                            $sortie = true;
                        }
                    }
                    if ($sortie) //si le produit existe déjà, l'utilisateur est averti
                    {
                        echo $this->session->set_flashdata('erreur','<div class="alert alert-danger">Ce produit est déjà présent dans le panier.</div>');
                        redirect('boutique/cAffiche');
                    }
                    else //sinon le produit est ajouté dans le panier
                    {
                        array_push($tab, $data);
                        $this->session->panier = $tab;
                        redirect('boutique/cAffiche');
                    }
                }
            }
        }
        else
         {
             $this->session->set_flashdata('erreur','<div class="alert alert-danger">Veuillez vous connecter pour ajouter un produit dans le panier.</div>');
             redirect('produits/liste');
         }
    }

    /**
     * \brief Méthode qui affiche la page boutique
     * \details Cette méthode affiche la page boutique lors du premier chargement de cette page, ou appelle la méthode ajoute()
     *          lorsque l'utilisateur ajoute un produit dans le panier
     * \param   aView    données issues du tableau produits de la base de données
     */

    public function cListeBoutique()
    {
        $this->load->model('produits_model');
        $aView["listes"] = $this->produits_model->listeBoutique();
        if ($this->input->post()) //deuxième appel de la page quand une tentative d'ajout au panier est effectuée
        {
            $this->cAjoutPanier($this->input->post('pro_id'));
        }
        else
        {
            $this->load->view('liste', $aView);
        }
    }

    /**
     * \brief Méthode qui liste les produits par prix croissants et affiche la page boutique
     * \details Cette méthode affiche la page boutique lors du premier chargement de cette page, ou appelle la méthode ajoute()
     *          lorsque l'utilisateur ajoute un produit dans le panier, en classant les produits par prix croissants
     * \param   aView    données issues du tableau produits de la base de données où les produits sont classés par prix croissants
     */

    public function cListePrixCroissants()
    {  $this->load->model('produits_model');

        $aView["listes"] = $this->produits_model->listeBoutiquePrixCroissants();
        if ($this->input->post()) //deuxième appel de la page quand une tentative d'ajout au panier est effectuée
        {
            $this->cAjoutPanier($this->input->post('pro_id'));
        }
        else
        {
            $this->load->view('liste',$aView);
        }
    }

    /**
     * \brief Méthode qui liste les produits par prix décroissants et affiche la page boutique
     * \details Cette méthode affiche la page boutique lors du premier chargement de cette page, ou appelle la méthode ajoute()
     *          lorsque l'utilisateur ajoute un produit dans le panier, en classant les produits par prix décroissants
     * \param   aView    données issues du tableau produits de la base de données où les produits sont classés par prix décroissants
     */

    public function cListePrixDecroissants()
    {
        $this->load->model('produits_model');
        $aView["listes"] = $this->produits_model->listeBoutiquePrixDecroissants();
        if ($this->input->post()) //deuxième appel de la page quand une tentative d'ajout au panier est effectuée
        {
            $this->cAjoutPanier($this->input->post('pro_id'));
        }
        else
        {
            $this->load->view('liste',$aView);
        }
    }

    /**
     * \brief Méthode qui charge la page panier
     * \details Cette méthode affiche la page panier
     */

    public function cAffiche()
    {
        $this->load->view('panier');
    }

    /**
     * \brief Méthode qui efface le \a panier puis qui charge la page panier
     * \details Cette méthode affiche la page panier après avoir effacé le \a panier
     * \param   panier    représente le contenu du panier effacé par cette méthode
     */

    public function efface()
    {
        $this->session->panier=array();
        $this->cAffiche();
    }

    /**
     * \brief Méthode qui supprime un des produits du panier
     * \details Cette méthode permet d'effacer uniquement un des produits du panier puis charge la page panier
     * \param   id    correspond au numéro du produit à supprimer du panier
     * \param   jeton    numéro sécurisant l'étape de suppression
     */

    public function effaceProduit($id)
    {
        $tab=$this->session->panier;
        if (isset($this->session->login))
        {
            for ($i=0; $i<count($tab); $i++) //on cherche dans le panier les produits à ne pas supprimer
            {
                if ($tab[$i]['pro_id'] === $id) {
                    unset($tab[$i]); //On efface le produit avec l'id en paramètre
                }
            }
            $this->session->panier=$tab; //le panier prend la valeur du tableau temporaire et ne contient donc plus le produit à supprimer
            $this->cAffiche();
        }
        else
        {
            $data['erreur'] = '<div class="alert alert-danger">Vous n\'êtes pas connecté. Veuillez vous connecter.</div>';
            $this->load->view('panier', $data);
        }
    }

    /**
     * \brief Méthode qui diminue la quantité d'un des produits du panier
     * \details Cette méthode permet de diminuer d'une unité la quantité du produit dont le numéro est \a id.
     *          Elle bloque l'opération quand la quantité arrive à 1.
     *          Une fois la quantité diminuée, la page panier est rechargée.
     * \param   id    correspond au numéro du produit dont la quantité doit être diminuée
     */

    public function qtemoins($id)
    {
        $tab=$this->session->panier; //tableau panier placé dans un tableau tab
        for ($i=0; $i<count($tab); $i++) //on parcourt le tableau produit après produit
        {
            if ($tab[$i]['pro_id'] === $id) {
                if ($tab[$i]['pro_qte'] > 1) {
                    $tab[$i]['pro_qte']--;
                } else {
                    unset($tab[$i]); //On efface le produit avec l'id en paramètre
                }
            }
        }
        $this->session->panier=$tab; //les données du tableau temporaire remplacent les anciennes données du tableau
        $this->cAffiche();
    }

    /**
     * \brief Méthode qui accroît la quantité d'un des produits du panier
     * \details Cette méthode permet d'incrémenter d'une unité la quantité du produit dont le numéro est \a id.
     *          Une fois la quantité incrémentée, la page panier est rechargée.
     * \param   id    correspond au numéro du produit dont la quantité doit être augmentée
     */

    public function qteplus($id)
    {
        $tab=$this->session->panier;
        for ($i=0; $i<count($tab); $i++) //on parcourt le tableau produit après produit
        {
            if ($tab[$i]['pro_id'] === $id)
            {
                $tab[$i]['pro_qte']++;
            }
        }
        $this->session->panier=$tab;
        $this->cAffiche();
    }
}

?>




