<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listar_profesores extends CI_Controller {
	public function index(){
		$this->load->model('profesor');
		$profesor = new Profesor();
		$profesores = $profesor->listar();
		$data['title'] = 'Lista de profesores';
		if(empty($profesores)){
			$this->load->view('no_profesores');
		}else{
			$data['profesores'] = $profesores;
			$this->load->view('lista_profesores', $data);
		}
		$this->load->view('footer');
	}
}
?>