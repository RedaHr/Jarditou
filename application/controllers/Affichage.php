<?php defined('BASEPATH') or exit('No direct script access allowed');

class Affichage extends CI_Controller
{

    // ----- Methode Affichage ---------
    public function accueil()
    {
        $this->load->view('accueil');
    }

    public function panier()
    {
        $this->load->view('panier');
    }
}
?>