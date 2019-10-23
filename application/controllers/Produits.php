<?php defined('BASEPATH') or exit('No direct script access allowed');

class Produits extends CI_Controller
{
    // ----- Methode Liste ---------
    public function liste()
    {
        // Charge la librairie 'database'
        //$this->load->database(); 

        // Exécute la requête 
        $results = $this->db->query("SELECT * FROM produits");

        // Récupération des résultats    
        $aListe = $results->result();

        // Ajoute des résultats de la requête au tableau des variables à transmettre à la vue      
        $aView["listes"] = $aListe;

        // Appel de la vue avec transmission du tableau  
        $this->load->view('liste', $aView);
    }

    public function details($id)
    {
        // Appel de la vue avec transmission du tableau  
        //$id = $this->input->post("id");
        $aListe = $this->db->query("SELECT * FROM produits WHERE pro_id = ?", array($id));
        $aView["produits"] = $aListe->row();

        $this->load->view('details', $aView);
    }

    // ----- Methode Ajout 
    public function ajout()
    {
        //  -------------->  Appeler la table CATEGORIES  <-----------


        $requete_cat = $this->db->query("SELECT cat_id, cat_nom FROM categories");
        $array_cat = $requete_cat->result();
        $pView['cat'] = $array_cat;

        if ($this->input->post()) { // 2ème appel de la page: traitement du formulaire

            if ($this->form_validation->run('ajoute') == TRUE) {

                $extension = strtolower(substr(strrchr($_FILES["pro_photo"]["name"], "."), 1));

                $donne = $this->input->post();
                $donne['pro_photo'] = $extension;
                $donne['pro_d_ajout'] = date('Y-m-d');
                $this->db->insert('produits', $donne);
                // On créé un tableau de configuration pour l'upload
                $config['upload_path'] = './assets/img/'; // chemin où sera stocké le fichier
                $config['file_name'] = $this->db->insert_id() . "." . $extension; // nom du fichier final
                $config['allowed_types'] = 'gif|jpg|png'; // Types autorisés (ici pour des images)

                // On charge la librairie 'upload' de CodeIgniter en lui envoyant la config
                $this->load->library('upload', $config);
                // La méthode do_upload() effectue les validations sur l'attribut HTML 'name' ('fichier' dans notre formulaire) et si OK renomme et déplace le fichier tel que configuré
                if (!$this->upload->do_upload('pro_photo')) {
                    // Echec,  on réaffiche le formulaire
                    var_dump($this->upload->data());

                    $errors = $this->upload->display_errors();

                    var_dump($errors);

                    exit;
                } else { // Succès, on redirige sur la liste
                    redirect('produits/liste');
                }
            } else {
                $this->load->view('ajout', $pView);
            }
        } else { // 1er appel de la page: affichage du formulaire
            $this->load->view('ajout', $pView);
        }
    }


    // ----- Methode Modification ---------

    public function modif($id)

    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $data['pro_d_modif'] = date('Y-m-d H:i:s');
            $extension = strtolower(substr(strrchr($_FILES["pro_photo"]["name"], "."), 1));
            $data['pro_photo'] = $extension;
            $this->db->where('pro_id', $id);
            $this->db->update('produits', $data);

            $config['upload_path'] = './assets/img/'; // chemin où sera stocké le fichier
            $config['file_name'] = $id . "." . $extension; // nom du fichier final
            $config['allowed_types'] = 'gif|jpg|png'; // Types autorisés (ici pour des images)
            $config['overwrite'] = TRUE;
            // On charge la librairie 'upload' de CodeIgniter en lui envoyant la config
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('pro_photo')) {
                // récupération de l'extension du fichier en vue de son insertion en base de données et extraction du '.' (codeigniter garde le point avant l'extension)
                $data['pro_photo'] = substr($this->upload->data('file_ext'), 1);
            }
            redirect('produits/liste');
        } else {
            $aListe = $this->db->query("SELECT * FROM produits WHERE pro_id= ?", array($id));
            $aView["produits"] = $aListe->result(); // première ligne du résultat        
            $this->load->view('modif', $aView);

        }

    }


    // ----- Methode Suppression ---------

    public function supprimer($id)

    {
        // $this->load->database();

        // if ($this->input->post()) {
        //     $this->input->get('pro_id');
        //     $data = $this->input->post();
        //     $id = $this->input->post('id');
        $this->db->where('pro_id', $id);
        $this->db->delete('produits');
        redirect('produits/liste');
        // } else {
        //     $aListe = $this->db->query("SELECT * FROM produits WHERE pro_id= ?", array($id));
        //     $aView["produits"] = $aListe->result(); // première ligne du résultat        
        //     $this->load->view('modif', $aView);
        // }
    }

}   // -> Fermeture de la Class Produits
