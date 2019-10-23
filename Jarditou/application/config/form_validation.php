<?php 
$config = array(
    
'ajoute' => array(
    array(
    'field' => 'pro_ref',
    'label' => 'Référence',
    'rules' => array('trim',
                     'required',
                     'htmlspecialchars'),
    'errors' => array('required' => 'Veuillez inserer une %s.')
), array(
    'field' => 'pro_libelle',
    'label' => 'Libellé',
    'rules' => array('trim',
                     'required',
                     'htmlspecialchars'),
    'errors' => array('required' => 'Veuillez inserer une %s.')
), array(
    'field' => 'pro_description',
    'label' => 'Description',
    'rules' => array('trim',
                     'required',
                     'htmlspecialchars'),
    'errors' => array('required' => 'Veuillez inserer une %s.')
), array(
    'field' => 'pro_prix',
    'label' => 'Prix',
    'rules' => array('trim',
                     'required',
                     'min_length[1]',
                     'max_length[9]',
                     'htmlspecialchars'),
    'errors' => array('required' => 'Veuillez inserer une %s.')
), array(
    'field' => 'pro_stock',
    'label' => 'Stock',
    'rules' => array('trim',
                     'required',
                     'htmlspecialchars'),
    'errors' => array('required' => 'Veuillez inserer une %s.')
), array(
    'field' => 'pro_couleur',
    'label' => 'Couleur',
    'rules' => array('trim',
                     'required',
                     'htmlspecialchars'),
    'errors' => array('required' => 'Veuillez inserer une %s.')
)));

$config['error_prefix'] = '<div class="text-danger">';
$config['error_suffix'] = '</div>';

?>