<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar_profesor extends CI_Controller {
	public function index(){
		$this->cargar_formulario_registro();
	}

	public function cargar_formulario_registro($back = null, $errores = null){
		$data['title'] = 'Registro profesor';
		$data['errores'] = $errores;		
		if($back == null){
			$data['back'] = array('cedula'=>'', 'nombre'=>'', 'fecha_nacimiento'=>'', 'lugar_nacimiento'=>'', 'titulo'=>'','departamento'=>'');
		}else{
			$data['back'] = $back;
		}
		$this->load->view('header', $data);
		$this->load->view('registrar_profesor', $data);
		$this->load->view('footer');
	}

	public function registrar(){
		$cedula = $this->input->post('cedula');
		$nombre = $this->input->post('nombre');
		$fecha_nacimiento = $this->input->post('fecha_nacimiento');
		$lugar_nacimiento = $this->input->post('lugar_nacimiento');
		$titulo = $this->input->post('titulo');
		$departamento = $this->input->post('departamento');
		$this->load->model('Profesor');
		$datos_profesor = array('cedula'=>$cedula, 
								'nombre'=>$nombre, 
								'fecha_nacimiento'=>$fecha_nacimiento, 
								'lugar_nacimiento'=>$lugar_nacimiento, 
								'titulo'=>$titulo,
								'departamento'=>$departamento
								);
		$profesor = new Profesor($datos_profesor);
		$errores = $profesor->validar();
		if($errores === TRUE){
			$profesor->registrar();
			$data['title'] = 'Profesor registrado';
			$this->load->view('header', $data);
			$this->load->view('success');
			$this->load->view('footer');
		}else{	
			$this->cargar_formulario_registro($datos_profesor, $errores);
		}
	}
}
?>