<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function set_clientes($data)
	{
		$this->db->insert('clientes',$data);
	}
	//-------------------------------------
	public function set_clienteValidado($data,$correo,$telefono){

		$this->db->from('clientes');
		$this->db->where('correo',$correo);
		$this->db->where('telefono',$telefono);
		$query=$this->db->get();
		if($query->num_rows()>0)
		{
			return true;
		}
		else
		{
			$this->db->insert('clientes',$data);
			return false;
		}

	}
	//-------------------------------------
	//FUNCTION DEL USUARIO
	public function get_clientes()
	{
		//SELECT * FROM USUARUIO
		$this->db->from('clientes');
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
	public function delete_cliente($id_cliente)
	{
		$this->db->where('id_cliente',$id_cliente);
		$this->db->delete('clientes');
	}
	public function get_cliente_modificar($id_cliente)
	{
		$this->db->from('clientes');
		$this->db->where('id_cliente',$id_cliente);
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
	public function update_cliente($id_cliente,$data)
	{
		$this->db->where('id_cliente',$id_cliente);
		$this->db->update('clientes',$data);
	}
	public function get_cliente_buscar($correo,$telefono)
	{
		$this->db->from('clientes');
		$this->db->where('correo',$correo);
		$this->db->where('telefono',$telefono);
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

	//------------------------------------------
	public function agregar_pedido($data)
	{
		$this->db->insert('pedidos',$data);
	}
}
?>