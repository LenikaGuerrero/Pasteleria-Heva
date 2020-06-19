<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sucursales_model extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function set_sucursal($data)
	{
		$this->db->insert('sucursales',$data);
	}
	//FUNCTION DEL USUARIO
	public function get_sucursales()
	{
		//SELECT * FROM USUARUIO
		$this->db->from('sucursales');
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
	public function delete_sucursal($id_sucursal)
	{
		$this->db->where('id_sucursal',$id_sucursal);
		$this->db->delete('sucursales');
	}
	public function get_sucursal_modificar($id_sucursal)
	{ 
		$this->db->from('sucursales');
		$this->db->where('id_sucursal',$id_sucursal);
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
	public function update_sucursal($id_sucursal,$data)
	{
		$this->db->where('id_sucursal',$id_sucursal);
		$this->db->update('sucursales',$data);
	}
}
?>