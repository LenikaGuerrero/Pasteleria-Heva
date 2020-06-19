<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	function __construct()
	{

		parent::__construct();
		$this->load->model('Usuarios_model');
	}
	public function index()
	{
		if($this->session->userdata('activo')==1)
		{
			$DATA_USUARIOS=$this->Usuarios_model->get_usuarios(); //usuarios_model
			$data=array(
				'DATA_USUARIOS'=>$DATA_USUARIOS,
				'PRUEBA'=>1,
			);

			$this->load->view('headers/scripts');
			$this->load->view('headers/panelnavbar');
			$this->load->view('usuarios/usuarios',$data);
		}
		else
		{
			redirect('login');
		}
	}
	public function agregar_usuario()
	{
		$this->load->view('headers/panelnavbar');
		$this->load->view('headers/scripts');
		$this->load->view('usuarios/agregar');
	}
	public function crear_usuario()
	{
		$nombre= $this->input->post('nombre',TRUE);
		$correo= $this->input->post('correo',TRUE);
		$contrasena=$this->input->post('contrasena',TRUE);
		
		$data=array(
				'nombre'=> $nombre,
				'correo'=> $correo,
				'contrasena' => $contrasena,
		);
		$this->Usuarios_model->set_usuarios($data);
		redirect('usuarios');
	}
	public function eliminar_usuario()
	{
		echo 'HolaMundo';
		$id_usuario=$this->uri->segment(3);
		$this->Usuarios_model->delete_usuario($id_usuario);
		redirect('usuarios');
	}
	public function eliminar_usuario_logico()
	{
		$id_usuario= $this->uri->segment(3);
		$data =array(
			'activo'=>0,
			);
		$this->Usuarios_model->delete_usuario_logico($id_usuario,$data);
		redirect('usuarios');
	}

	public function modificar()
	{
		$id_usuario = $this->uri->segment(3);
		$DATA_USUARIOS = $this->Usuarios_model->get_usuario_modificar($id_usuario);
		$data=array(
			'DATA_USUARIOS'=>$DATA_USUARIOS,
			'id_usuario' =>$id_usuario,
		);

		$this->load->view('headers/panelnavbar');
		$this->load->view('headers/scripts');
		$this->load->view('usuarios/modificar',$data);
	}
	public function actualizar_info()
	{
		$id_usuario=$this->uri->segment(3);
		$nombre=$this->input->post('nombre',TRUE);
		$correo=$this->input->post('correo',TRUE);
		$contrasena=$this->input->post('contrasena',TRUE);
		$data=array(
				
				'nombre'=> $nombre,
				'correo'=> $correo,
				'contrasena'=> $contrasena,
		);
		$this->Usuarios_model->update_usuario($id_usuario,$data);
		//echo "<script>alert('Datos Modificados Correctamente');window.location.href='".base_url()."index.php/usuarios'</script>";
	}
}
?>