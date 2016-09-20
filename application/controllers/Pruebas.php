<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pruebas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('idiomamodel','idiomas');
	}//fin del constructor de la clase

	public function index() {

		$data['prueba'] = $this->idiomas->idiomas_instalados();

		//cargar vista de prueba
		$this->load->view('pruebas/prueba',$data);
	}//fin funcion index

}//fin de la clase Pruebas