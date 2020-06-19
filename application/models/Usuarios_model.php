<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function set_usuarios($data)
	{
		$this->db->insert('usuarios',$data);
	}
	//FUNCTION DEL USUARIO
	public function get_usuarios()
	{
		//SELECT * FROM USUARUIO
		$this->db->from('usuarios');
		$this->db->where('activo',1);
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
	public function delete_usuario($id_usuario)
	{
		$this->db->where('id_usuario',$id_usuario);
		$this->db->delete('usuarios');
	}
	public function delete_usuario_logico($id_usuario,$data)
	{
		//Update usuarios SET activo = 0 where No_Control= Variable
		$this->db->where('id_usuario',$id_usuario);
		$this->db->update('usuarios',$data);
	}
	public function get_usuario_modificar($id_usuario)
	{
		$this->db->from('usuarios');
		$this->db->where('id_usuario',$id_usuario);
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
	public function update_usuario($id_usuario,$data)
	{
		$this->db->where('id_usuario',$id_usuario);
		$this->db->update('usuarios',$data);

	}
}
?>