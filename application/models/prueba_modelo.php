<?php
class Prueba_modelo extends CI_Model{

function __construct()
{
  parent::__construct();
}
  function seleccionar_todo()
  {
    $query = $this->db->get('usuarios');
    return $query->result();
  }
  function agregar($data)
  {
  $query = $this->db->insert('usuarios',$data);
  return;
  }
  function obtenerId($id)
  {
    $this->db->where('id',$id);
    $query = $this->db->get('usuarios');
    return $query->row();
  }






}

 ?>
