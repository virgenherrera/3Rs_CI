<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pruebas_js extends CI_Controller {

public function __construct(){
	parent::__construct();
	$this->load->library('javascript');
	$this->load->library('jquery');
}//fin del metodo constructor

public function index(){
	$this->load->view('pruebas_js/prueba1');
}//fin del metodo index

}//fin de la clase Pruebas_js