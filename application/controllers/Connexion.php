<?php defined('BASEPATH') or exit('No direct script access allowed');

class Connexion extends CI_Controller
{

    // ----- Methode Connexion ---------
    public function login()
    {
        if ($this->input->post()) {
            $user = $this->input->post('pseudo');
            $aUsers = $this->db->query("SELECT * FROM users WHERE pseudo = ?", $user)->result();

            if (!empty($aUsers)) {
                // $pwd = $this->db->query('SELECT mot_de_passe FROM users WHERE pseudo = ?', $user)->result();
                if (password_verify($this->input->post('password'), $aUsers[0]->mot_de_passe)) {

                    $this->session->set_userdata('login', TRUE);
                    // $role = $this->db->query('SELECT role FROM users WHERE pseudo = ?', $user)->result();
                    if ($aUsers[0]->role == 'admin') {
                        $this->session->set_userdata('admin', TRUE);
                    }
                    $maj['d_connexion'] = date('Y-m-d H:i:s');
                    $this->db->where('pseudo', $user);
                    $this->db->update('users', $maj);
                    $this->session->set_userdata('message', 'Bienvenue sur Jarditou Cher(e) ' . $user);
                    redirect('affichage/accueil');
                } else {
                    $this->session->set_flashdata('errPass', 'Le mot de passe est incorrect');
                    redirect('connexion/inscription');
                }
            } else {
                $this->session->set_flashdata('errLogin', 'Votre Pseudo est inexistant');
                redirect('connexion/inscription');
            }
        }
    }


    // ----- Methode Inscription ---------
    public function inscription()
    {
        $this->form_validation->set_rules('pseudo', 'Pseudo', 'trim|required|callback_regex_check|is_unique[users.pseudo]', array('required' => "Veuillez inserer un nom d'utilisateur"));
        $this->form_validation->set_rules('mail', 'E-mail', 'trim|required|valid_email', array('required' => "Veuillez nous fournir un E-mail"));
        $this->form_validation->set_rules('mot_de_passe', 'Mot de passe', 'trim|required|regex_match[/^[A-Z a-z 0-9 _ . \-]+$/]|matches[passwordC]', array('required' => "Veuillez inserer un mot de passe"));
        $this->form_validation->set_rules('passwordC', 'Confirmation mot de passe', 'trim|required|matches[mot_de_passe]', array('required' => "Veuillez remplir un mot de passe identique"));

        if ($this->form_validation->run() === TRUE) {
            // $encrypted_password = $this->encrypt->encode($this->inpot->post('password'))
            // $data = array(
            //     'pseudo' => $this->input->post('pseudo'),
            //     'mail' => $this->input->post('mail'),
            //     'mot_de_passe' => $this->input->post('password'),
            // )

            if ($this->input->post()) {
                $donne = $this->input->post();
                $user = $this->input->post('pseudo');
                unset($donne['passwordC']);
                $donne['mot_de_passe'] = password_hash($this->input->post('mot_de_passe'), PASSWORD_DEFAULT);
                $donne['d_inscription'] = date('Y-m-d');
                $donne['d_connexion'] = date('Y-m-d H:i:s');
                $this->db->insert('users', $donne);
                $this->session->set_userdata('login', TRUE);

                $this->session->set_userdata('message', 'Bienvenue sur Jarditou Cher(e) ' . $user);
                redirect('affichage/accueil');

                // verification de champ login et mot de passe et la confirmation de mot de passe sont bien identique et insertion en base de donnée
                // avec date d'inscription et
            }
        } else {
            $this->load->view('inscription');
        }
    }
/* ---------------------------------------*\
                Verif REGEX Pseudo
\* ---------------------------------------*/
    public function regex_check($str)
    {
        if (preg_match("/^(?:'[A-Za-z](([\._\-][A-Za-z0-9])|[A-Za-z0-9])*[a-z0-9_]*')$/", $str))
        {
            $this->form_validation->set_message('regex_check', 'Le %s est pas valid !');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
    /* ---------------------------------------*\
            Verif REGEX Pseudo
    \* ---------------------------------------*/


    public function deconnexion()
    {
        $this->session->sess_destroy();
        redirect('affichage/accueil');
    }
}   // => Fermeture de la CLASS