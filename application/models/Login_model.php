<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
//FUNCTION DEL USUARIO
	public function get_usuarios($correo,$contrasena)
	{
		//SELECT * FROM USUARUIO
		$this->db->from('usuarios');
		$this->db->where('correo',$correo);
		$this->db->where('contrasena',$contrasena);
		$query=$this->db->get();
		if($query->num_rows()>0)
		{
			return $query;
		}
		else
		{
			return false;
		}

	}
}
?>