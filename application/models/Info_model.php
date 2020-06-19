<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info_model extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_info()
	{
		//SELECT * FROM USUARUIO
		$this->db->from('pedidos');
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
	public functi

}
?>