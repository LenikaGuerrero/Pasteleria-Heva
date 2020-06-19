<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {

	function __construct()
	{

		parent::__construct();
		$this->load->model('Info_model');
	}
	public function index()
	{
		if($this->session->userdata('activo')==1)
		{
			$DATA_PEDIDOS=$this->Info_model->get_info(); //usuarios_model
			$data=array(
				'DATA_PEDIDOS'=>$DATA_PEDIDOS,
				'PRUEBA'=>1,
			);

			$this->load->view('headers/scripts');
			$this->load->view('headers/panelnavbar');
			$this->load->controller()
	
	}
	else
		{
			redirect('login');
		}

	}
}
?>