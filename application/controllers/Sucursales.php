<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sucursales extends CI_Controller {

	function __construct()
	{

		parent::__construct();
		$this->load->model('Sucursales_model');
	}
	public function index()
	{
		if($this->session->userdata('activo')==1)
		{
			$DATA_SUCURSALES=$this->Sucursales_model->get_sucursales(); //usuarios_model
			$data=array(
				'DATA_SUCURSALES'=>$DATA_SUCURSALES,
				'PRUEBA'=>1,
			);

			$this->load->view('headers/scripts');
			$this->load->view('headers/panelnavbar');
			$this->load->view('sucursales/sucursales',$data);
		}
		else
		{
			redirect('login');
		}
	}
	//Aqui abajo es para mandar a llamar la vista de sucursal
	public function psucursal(){
		$DATA_SUCURSALES=$this->Sucursales_model->get_sucursales(); //usuarios_model
			$data=array(
				'DATA_SUCURSALES'=>$DATA_SUCURSALES,
				'PRUEBA'=>1,
			);

		$this->load->view('headers/scripts');
		$this->load->view('headers/navbar');
		$this->load->view('sucursales/ppalsucursal',$data);
		$this->load->view('headers/footer');
	}
	//---------------
	public function agregar_sucursal()
	{
		$this->load->view('headers/panelnavbar');
		$this->load->view('headers/scripts');
		$this->load->view('sucursales/agregar');
	}
	public function crear_sucursal()
	{
		$nombre= $this->input->post('nombre',TRUE);
		$direccion= $this->input->post('direccion',TRUE);
		$ciudad= $this->input->post('ciudad',TRUE);
		$telefono=$this->input->post('telefono',TRUE);
		
		$data=array(
				'nombre'=> $nombre,
				'direccion'=> $direccion,
				'ciudad' => $ciudad,
				'telefono'=> $telefono,
		);
		$this->Sucursales_model->set_sucursal($data);
		redirect('sucursales');
	}
	public function eliminar_sucursal()
	{
		echo 'HolaMundo';
		$id_sucursal=$this->uri->segment(3);
		$this->Sucursales_model->delete_sucursal($id_sucursal);
		redirect('sucursales');
	}

	public function modificar()
	{
		$id_sucursal = $this->uri->segment(3);
		$DATA_SUCURSALES = $this->Sucursales_model->get_sucursal_modificar($id_sucursal);
		$data=array(
			'DATA_SUCURSALES'=>$DATA_SUCURSALES,
			'id_sucursal' =>$id_sucursal,
		);

		$this->load->view('headers/panelnavbar');
		$this->load->view('headers/scripts');
		$this->load->view('sucursales/modificar',$data);
	}
	public function actualizar_info()
	{
		$id_sucursal=$this->uri->segment(3);
		$nombre=$this->input->post('nombre',TRUE);
		$direccion=$this->input->post('direccion',TRUE);
		$ciudad=$this->input->post('ciudad',TRUE);
		$telefono=$this->input->post('telefono',TRUE);
		$data=array(
				
				'nombre'=> $nombre,
				'direccion'=> $direccion,
				'ciudad'=> $ciudad,
				'telefono'=> $telefono,
		);
		$this->Sucursales_model->update_sucursal($id_sucursal,$data);
		//echo "<script>alert('Datos Modificados Correctamente');window.location.href='".base_url()."index.php/sucursales'</script>";
	}
}
?>