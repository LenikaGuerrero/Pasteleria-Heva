<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos_model extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_pedidos()
	{

		$this->db->select( 'p.id_pedido as uno, s.nombre as dos, c.nombre as tres, pro.nombre as cuatro, p.cantidad as cinco, (p.total*p.cantidad) as seis, p.fecha as siete' ); 
		$this->db->from('pedidos p');
		$this->db->join('sucursales s','p.id_sucursal = s.id_sucursal');
		$this->db->join('clientes c','p.id_cliente = c.id_cliente');
		$this->db->join('productos pro','p.id_producto = pro.id_producto');
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