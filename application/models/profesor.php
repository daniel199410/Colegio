<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Profesor extends CI_Model{
    private $cedula;
    private $nombre;
    private $fecha_nacimiento;
    private $lugar_nacimiento;
    private $titulo;
    private $departamento;

    public function __construct($value = null){
        parent::__construct();
        $this->load->database();
        if($value != null){
            if(is_array($value)){
                settype($value, 'object');
            }
            if(is_object($value)){
                $this->cedula = isset($value->cedula) ? $value->cedula : null;
                $this->nombre = isset($value->nombre) ? $value->nombre : null;
                $this->fecha_nacimiento = isset($value->fecha_nacimiento) ? $value->fecha_nacimiento : null;
                $this->lugar_nacimiento = isset($value->lugar_nacimiento) ? $value->lugar_nacimiento : null;
                $this->titulo = isset($value->titulo) ? $value->titulo : null;
                $this->departamento = isset($value->departamento) ? $value->departamento : null;
            }
        }
    }

    public function __get($key){
        switch($key){
            case 'cedula':
            case 'nombre':
            case 'fecha_nacimiento':
            case 'lugar_nacimiento':
            case 'titulo':
            case 'departamento':
                return $this->$key;
            default:
                return parent::__get($key);
        }
    }

    public function validar(){
        $errorres = [];
        if($this->cedula == null)
            $errores[] = 'Debes ingresar una cédula';
        elseif(!is_numeric($this->cedula))
            $errores[] = 'La cédula debe de ser un número';
        elseif(strlen($this->cedula) < 7)
            $errores[] = 'La cédula debe tener almenos siete dígitos';
        if($this->nombre == null)
            $errores[] = 'Debes ingresar un nombre';
        if($this->fecha_nacimiento == null)
            $errores[] = 'Debes ingresar una fecha';
        if($this->lugar_nacimiento == null)
            $errores[] = 'Debes ingresar un lugar de nacimiento';
        if($this->titulo == null)
            $errores[] = 'Debes ingresar un título';
        if($this->departamento == null)
            $errores[] = 'Debes ingresar el departamento al que pertenece el profesor';
        return empty($errores) ? TRUE : $errores;
    }

    public function registrar(){
        $data = [
            'cedula'=>$this->cedula, 
            'nombre'=>$this->nombre, 
            'fecha_nacimiento'=>$this->fecha_nacimiento, 
            'lugar_nacimiento'=>$this->lugar_nacimiento, 
            'titulo'=>$this->titulo,
            'departamento'=>$this->departamento
        ];
        if($this->db->insert('profesor', $data) !== FALSE)
            return TRUE;
        else
            return FALSE;
    }

    public function listar(){
        $this->load->model('Profesor');
        $query = $this->db->get('profesor');
        $profesores = [];
        foreach ($query->result() as $key=>$profesor) {
            $profesores[$key] = new Profesor($profesor);
        }
        return $profesores;
    }
}
?>