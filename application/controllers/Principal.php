<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index()
	{
		$this->load->view('headers/scripts');
		$this->load->view('headers/navbar');
		$this->load->view('pprincipal/principal');
		$this->load->view('headers/footer');
	}
	public function tes()
	{
		$DATA_CLIENTES = FALSE;
		$id_cliente=FALSE;
		$data=array(
			'DATA_CLIENTES'=>$DATA_CLIENTES,
			'id_cliente' =>$id_cliente,
		);
		$this->load->view('headers/scripts');
		$this->load->view('headers/navbar');
		$this->load->view('clientes/datos_cliente',$data);
		$this->load->view('headers/footer');
	}
}
