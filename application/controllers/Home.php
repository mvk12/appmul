<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index()
  {
    $this->twig->display('Home/Index');
  }

}

/* End of file Home.php */
