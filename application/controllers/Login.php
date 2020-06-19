<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{

		parent::__construct();
		$this->load->model('Login_model');
	}
	public function index()
	{
		if($this->session->userdata('activo')== 1)
		{
			redirect('usuarios');
			//$this->load->view('headers/navbar');
			//$this->load->view('headers/scripts');
			//$this->load->view('login/login');		
		}
		else
		{
			$this->load->view('headers/scripts');
			$this->load->view('login/login');
		}
	}
	public function autentificar(){
		$correo = $this->input->post('correo',TRUE);
		$contrasena = $this->input->post('contrasena',TRUE);

		$DATA_USUARIO= $this->Login_model->get_usuarios($correo,$contrasena);

		$data = array(
			'correo' => $correo,
			'contrasena' => $contrasena,
			'activo' =>1,
		);
		if($DATA_USUARIO != FALSE)
		{
			$this->session->set_userdata($data);
			redirect('usuarios');
		}
		else{
			echo "<script>alert('Datos Incorrectos,Intente nuevemante');window.location.href='".base_url()."'</script>";
			
		}		
	}

	public function cerrar_sesion()
	{
		$this->session->sess_destroy();
		echo "<script>alert('Cierre de Sesion Correcto');window.location.href='".base_url()."'</script>";
		
	}

}
?>