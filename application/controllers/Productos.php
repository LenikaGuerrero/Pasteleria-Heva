<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {

	function __construct()
	{

		parent::__construct();
		$this->load->model('Productos_model');
	}
	public function index()
	{

		if($this->session->userdata('activo')==1)
		{
			$DATA_PRODUCTOS=$this->Productos_model->get_productos(); //usuarios_model
			$data=array(
				'DATA_PRODUCTOS'=>$DATA_PRODUCTOS,
				'PRUEBA'=>1,
			);
			$this->load->view('headers/scripts');
			$this->load->view('headers/panelnavbar');
			$this->load->view('productos/productos',$data);
		}
		else
		{
			redirect('login');
		}
	}
	//Aqui abajo es para mandar a llamar la vista de productos
	public function pproducto(){
		$DATA_PRODUCTOS=$this->Productos_model->get_productos(); //usuarios_model
			$data=array(
				'DATA_PRODUCTOS'=>$DATA_PRODUCTOS,
				'PRUEBA'=>1,
			);
		$this->Productos_model->limpiar_orden();
		$this->load->view('headers/scripts');
		$this->load->view('headers/navbar');
		$this->load->view('productos/ppalproductos',$data);
		$this->load->view('headers/footer');
	}
	//---------------
	public function agregar_producto()
	{
		$this->load->view('headers/panelnavbar');
		$this->load->view('headers/scripts');
		$this->load->view('productos/agregar');
	}
	public function crear_producto()
	{
		$nombre= $this->input->post('nombre',TRUE);
		$descripcion= $this->input->post('descripcion',TRUE);
		$categoria= $this->input->post('categoria',TRUE);
		$porciones= $this->input->post('porciones',TRUE);
		$precio=$this->input->post('precio',TRUE);
		$imagen=$this->input->post('imagen',TRUE);
		$imagen = filter_var($imagen, FILTER_SANITIZE_URL);
	    
	    // Validar url
	    if (!filter_var($imagen, FILTER_VALIDATE_URL) === false) {
	        $data=array(
				'nombre'=> $nombre,
				'descripcion'=> $descripcion,
				'categoria'=> $categoria,
				'porciones' => $porciones,
				'precio'=> $precio,
				'imagen'=> $imagen,
		);
		$this->Productos_model->set_producto($data);
		//echo "<script>alert('Producto Añadido Correctamente'); window.location.href='".base_url()."index.php/productos'</script>";
	    } else {
	        echo("<script>alert('URL no valida');window.location.href='".base_url()."index.php/productos/agregar_producto'</script>");
	        $this->load->view('headers/panelnavbar');
			$this->load->view('headers/scripts');
			$this->load->view('productos/agregar');
	    }
		
	}
	public function eliminar_producto()
	{
		$id_producto=$this->uri->segment(3);
		$this->Productos_model->delete_producto($id_producto);
		redirect('productos');
	}

	public function modificar()
	{
		$id_producto = $this->uri->segment(3);
		$DATA_PRODUCTOS = $this->Productos_model->get_producto_modificar($id_producto);
		$data=array(
			'DATA_PRODUCTOS'=>$DATA_PRODUCTOS,
			'id_producto' =>$id_producto,
		);

		$this->load->view('headers/panelnavbar');
		$this->load->view('headers/scripts');
		$this->load->view('productos/modificar',$data);
	}
	public function actualizar_info()
	{
		$id_producto=$this->uri->segment(3);
		$nombre=$this->input->post('nombre',TRUE);
		$descripcion=$this->input->post('descripcion',TRUE);
		$categoria=$this->input->post('categoria',TRUE);
		$porciones=$this->input->post('porciones',TRUE);
		$precio=$this->input->post('precio',TRUE);
		$imagen=$this->input->post('imagen',TRUE);
		$imagen = filter_var($imagen, FILTER_SANITIZE_URL);
	    
	    // Validar url
	    if (!filter_var($imagen, FILTER_VALIDATE_URL) === false) {
		$data=array(
				
				'nombre'=> $nombre,
				'descripcion'=> $descripcion,
				'categoria'=> $categoria,
				'porciones'=> $porciones,
				'precio'=> $precio,
				'imagen'=> $imagen,
		);
		$this->Productos_model->update_producto($id_producto,$data);
		echo "<script>alert('Datos Modificados Correctamente'); window.location.href='".base_url()."index.php/productos'</script>";
		}else {
			cho("<script>alert('URL no valida');window.location.href='".base_url()."index.php/productos/modificar'</script>");
			$id_producto = $this->uri->segment(3);
			$DATA_PRODUCTOS = $this->Productos_model->get_producto_modificar($id_producto);
			$data=array(
				'DATA_PRODUCTOS'=>$DATA_PRODUCTOS,
				'id_producto' =>$id_producto,
			);

			$this->load->view('headers/panelnavbar');
			$this->load->view('headers/scripts');
			$this->load->view('productos/modificar',$data);

		}
	}
	public function pedido()
	{
		$id_producto=$this->uri->segment(3);
		$cantidad=1;
		$DATA_PRODUCTOS = $this->Productos_model->get_producto_modificar($id_producto);
		$data=array(
			'DATA_PRODUCTOS'=>$DATA_PRODUCTOS,
			'id_producto' =>$id_producto,
		);

		if($DATA_PRODUCTOS!=FALSE){
			foreach ($DATA_PRODUCTOS->result() as $row) 
			{
				$id_producto=$row->id_producto;
				$nombre=$row->nombre;
				$descripcion=$row->descripcion;
				$porciones=$row->porciones;
				$precio=$row->precio;
				$categoria=$row->categoria;
				$imagen=$row->imagen;
			}
		}	
		$total=$precio*$cantidad;
		$data=array(
				'id_producto'=>$id_producto,
				'nombre'=> $nombre,
				'descripcion'=> $descripcion,
				'porciones' => $porciones,
				'precio'=> $precio,
				'imagen'=> $imagen,
				'cantidad'=>$cantidad,
				'total'=>$total,
		);
		$this->Productos_model->set_orden($data);
		$DATA_PRODUCTOS=$this->Productos_model->get_orden();
		$DATAPRO=$this->Productos_model->get_productos(); //usuarios_model
			$data=array(
				'DATA_PRODUCTOS'=>$DATA_PRODUCTOS,
				'DATAPRO'=>$DATAPRO,
				'PRUEBA'=>1,
			);
		$this->load->view('headers/scripts');
		$this->load->view('headers/navbar');
		$this->load->view('checkout/checkout',$data);
		$this->load->view('headers/footer');
	}
	public function agregar_orden(){
		//---------------------------------------
		$id_producto = $this->input->post('comboagregar',TRUE);
		$cantidad=1;
		$DATA_PRODUCTOS = $this->Productos_model->get_producto_modificar($id_producto);
		$data=array(
			'DATA_PRODUCTOS'=>$DATA_PRODUCTOS,
			'id_producto' =>$id_producto,
		);
		if($DATA_PRODUCTOS!=FALSE){
			foreach ($DATA_PRODUCTOS->result() as $row) 
			{
				$id_producto=$row->id_producto;
				$nombre=$row->nombre;
				$descripcion=$row->descripcion;
				$porciones=$row->porciones;
				$precio=$row->precio;
				$categoria=$row->categoria;
				$imagen=$row->imagen;
			}
		}	
		$total=$precio*$cantidad;
		$data=array(
				'id_producto'=>$id_producto,
				'nombre'=> $nombre,
				'descripcion'=> $descripcion,
				'porciones' => $porciones,
				'precio'=> $precio,
				'imagen'=> $imagen,
				'cantidad'=>$cantidad,
				'total'=>$total,
		);
		
		$this->Productos_model->set_orden($data);
		
		
	
		$DATA_PRODUCTOS=$this->Productos_model->get_orden();
		$DATAPRO=$this->Productos_model->get_productos(); //usuarios_model
			$data=array(
				'DATA_PRODUCTOS'=>$DATA_PRODUCTOS,
				'DATAPRO'=>$DATAPRO,
				'PRUEBA'=>1,
			);

		$this->load->view('headers/scripts');
		$this->load->view('headers/navbar');
		$this->load->view('checkout/checkout',$data);
		$this->load->view('headers/footer');

	}
	public function orden_actualizar_cant()
	{
		$id_producto=$this->input->post('id_oculto',TRUE);
		$DATA_PRODUCTOS = $this->Productos_model->get_producto_modificar($id_producto);
		$data=array(
			'DATA_PRODUCTOS'=>$DATA_PRODUCTOS,
			'id_producto' =>$id_producto,
		);
		if($DATA_PRODUCTOS!=FALSE){
			foreach ($DATA_PRODUCTOS->result() as $row) 
			{
				$id_producto=$row->id_producto;
				$nombre=$row->nombre;
				$descripcion=$row->descripcion;
				$porciones=$row->porciones;
				$precio=$row->precio;
				$categoria=$row->categoria;
				$imagen=$row->imagen;
			}
		}	

		$id_producto=$this->input->post('id_oculto',TRUE);
		$cantidad=$this->input->post('combocantidad',TRUE);
		$total=$precio*$cantidad;
		$data=array(
				
				'cantidad'=> $cantidad,
				'total'=>$total,
		);
		$this->Productos_model->update_orden($id_producto,$data);
		$DATA_PRODUCTOS=$this->Productos_model->get_orden();
		$DATAPRO=$this->Productos_model->get_productos(); //usuarios_model
			$data=array(
				'DATA_PRODUCTOS'=>$DATA_PRODUCTOS,
				'DATAPRO'=>$DATAPRO,
				'PRUEBA'=>1,
			);

		$this->load->view('headers/scripts');
		$this->load->view('headers/navbar');
		$this->load->view('checkout/checkout',$data);
		$this->load->view('headers/footer');
	}

}
?>