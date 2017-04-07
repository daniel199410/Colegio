<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrar_profesor extends CI_Controller {
	public function index(){
		$this->cargar_formulario_registro();
	}
}

?>