<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Prueba extends CI_Controller{

  public function __construct()
  {
      parent::__construct();
      $this->load->model('Prueba_modelo');
      $this->load->helper('form');
      $this->load->helper('url');
      $this->load->library('form_validation');

  }
  public function index(){

    $this->load->model('Prueba_modelo');
    $data['title'] = "index page";
    $data['datos'] = $this->mostrar();
     $this->load->template('home', $data);

  }
  public function insertar(){

    $data = array(
      'usuario'      =>    $this->input->post('usuario'),
      'pass'         =>    $this->input->post('pass'),
      'email'        =>    $this->input->post('email'),
      'direccion'    =>    $this->input->post('direccion'),
    );

    $this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|min_length[5]|max_length[12]|xss_clean');
    $this->form_validation->set_rules('pass', 'Contraseña', 'trim|required|');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('direccion', 'Direccion', 'trim|required');

        $this->load->model('Prueba_modelo');

        if($this->form_validation->run() == FALSE)
        {
          $data['title'] = "Ingresar";
          $this->load->template('ingresar',$data);
        }else{
          $this->Prueba_modelo->agregar($data);
          redirect(base_url());
        }
       }

  private function mostrar()
  {
    $this->load->model('Prueba_modelo');
    $data = $this->Prueba_modelo->seleccionar_todo();
    return $data;
  }

  public function editar($id)
  {

    $this->load->model('Prueba_modelo');
    $data['datos'] = $this->Prueba_modelo->obtenerId($id);
    $data['title'] = "Editar datos";
    $this->load->template('editar',$data);

  }
  public function actual()
  {
    $this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|min_length[5]|max_length[12]|xss_clean');
    $this->form_validation->set_rules('pass', 'Contraseña', 'trim|required|');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('direccion', 'Direccion', 'trim|required');

    $id = $this->input->post('id');
    $data = array(
    'usuario' => $this->input->post('usuario'),
    'pass' => $this->input->post('pass'),
    'email' => $this->input->post('email'),
    'direccion' => $this->input->post('direccion'),
  );

   $this->load->library('form_validation');

  if ($this->form_validation->run() == FALSE)
  {
    $this->load->model('Prueba_modelo');
    $data['datos'] = $this->Prueba_modelo->obtenerId($id);
    $data['title'] = "Editar datos";
    $this->load->template('editar',$data);

  }else{
    $this->db->where('id',$id);
    $this->db->update('usuarios', $data);
    redirect(base_url());
     }
   }
   public function borrar($id)
     {
       $this->db->where('id',$id);
       $this->db->delete('usuarios');
       redirect(base_url());
     }

     public function add()
     {
       $data['title'] = "Agregar datos"; // can be change according to views
        $this->load->template('ingresar', $data); // this will load the view file

     }


  }



?>
