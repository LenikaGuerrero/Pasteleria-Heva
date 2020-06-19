<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function set_producto($data)
	{
		$this->db->insert('productos',$data);
	}
	//FUNCTION DEL USUARIO
	public function get_productos()
	{
		//SELECT * FROM USUARUIO
		$this->db->from('productos');
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
	public function delete_producto($id_producto)
	{
		$this->db->where('id_producto',$id_producto);
		$this->db->delete('productos');
	}
	public function get_producto_modificar($id_producto)
	{ 
		$this->db->from('productos');
		$this->db->where('id_producto',$id_producto);
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
	public function update_producto($id_producto,$data)
	{
		$this->db->where('id_producto',$id_producto);
		$this->db->update('productos',$data);
	}

	public function obtener_produucto($id_producto)
	{ 
		$this->db->from('productos');
		$this->db->where('id_producto',$id_producto);
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
	public function set_orden($data)
	{
		$this->db->insert('orden',$data);
	}
	public function get_orden()
	{
		//SELECT * FROM USUARUIO
		$this->db->from('orden');
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
	public function limpiar_orden(){
		$a="DELETE FROM `orden`";
		$this->db->query($a);
	}
	public function update_orden($id_producto,$data)
	{
		$this->db->where('id_producto',$id_producto);
		$this->db->update('orden',$data);
	}
	public function set_pedido($data)
	{
		$this->db->insert('pedidos',$data);
	}
}
?>