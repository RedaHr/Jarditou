<?php defined('BASEPATH') or exit('No direct script access allowed');

class VillageGreen extends CI_Controller
{

    // ----- Methode Affichage ---------
    public function accueil()
    {
        $this->load->view('villageGreen');
    }

    public function connexion()
    {
        $this->load->view('vg_Inscription');
    }
}
?>