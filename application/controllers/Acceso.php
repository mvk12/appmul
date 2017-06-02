<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceso extends CI_Controller 
{
  private $data = array();

  public function __construct() 
  {
    parent::__construct();

    $this->data['user'] = $this->session->userdata('user');
    
    $this->data['modulo'] = $this->router->fetch_module();
    $this->data['controlador'] = get_class();
    $this->data['metodo'] = $this->router->fetch_method();

    $this->data['token'] = $this->security->get_csrf_token_name();
    $this->data['hash'] = $this->security->get_csrf_hash();

    $this->data['notify'] = $this->session->flashdata('notify');
  }


  public function Index()
  {
    $this->data['title'] = 'Iniciar Sesión.';
    $this->twig->display('Acceso/Index', $this->data);
  }


  public function Accesar()
  {
    $sNombre = (string) trim( $this->input->post('Nombre') );
    $sPass = (string) $this->input->post('Pass');

    $this->load->library('form_validation');

    $aRules = array(
      array(
        'field' => 'Usuario',
        'label' => 'Usuario',
        'rules' => 'trim|required|min_length[5]',
      ),
      array(
        'field' => 'Pass',
        'label' => 'Contraseña',
        'rules' => 'required',
      ),
    );

    $this->form_validation->set_rules($aRules);

    if( $this->form_validation->run() === TRUE ) {
      echo 'Ok';
    }
    else {
      echo 'Bad';
    }

    /*
    try
    {
      if( $sNombre === '' ) {
        throw new Exception();
      }
    }
    catch(Exception $ex)
    {

    }
    */
  }

}

/* End of file Acceso.php */
