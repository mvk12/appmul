<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
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
    $this->data['title'] = 'Inicio.';
    $this->twig->display('Home/Index', $this->data);
  }

}

/* End of file Home.php */
