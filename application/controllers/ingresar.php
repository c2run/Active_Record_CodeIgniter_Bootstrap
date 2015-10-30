<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Ingresar extends CI_Controller{

  public function __construct()
  {
      parent::__construct();
      $this->load->helper('form');
      $this->load->library('form_validation');

    }

    public function index()
    {
      $data['title'] = "Ingresar";
      $this->load->template('ingresar',$data);
    }


}
