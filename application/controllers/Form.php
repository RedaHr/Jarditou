<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Produits extends CI_Controller
{
    public function ajout()
    {
        $this->load->helper('form');
        $this->load->view('ajout');


        if ($this->input->post()) { // 2ème appel de la page: traitement du formulaire
        $data = $this->input->post();
        $this->db->insert('produits', $data);
        redirect("produits/liste");
    
        }
        else
        { // 1er appel de la page: affichage du formulaire
        $this->load->view('ajout');
        }
    }
}
?>