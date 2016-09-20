<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servicios extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('idiomamodel', 'idiomas');
	}//fin del constructor de la clase

	public function index(){

		//guardar el idioma en  $sesion
		$sesion = $this->session->userdata('idioma');

		//si no existe la sesion, buscar idioma
		if(isset($sesion) or $sesion = ''){
			$idioma = $this->idiomas->existe_idioma_browser('es');
			$this->session->set_userdata(array('idioma' => $idioma));
		}
		else{
			$idioma = $sesion;
		}

		//llamar al modelo
		$this->load->model('principalmodel','modelo');


		//obtener y asignar los datos
		$contenido = $this->modelo->contenido_index($idioma,array('pagina_productos','encabezado'));
		$datos['url'] = base_url();
		$datos['titulo'] = 'Crear_alianza';
		$datos['menu'] = $contenido['encabezado'][0];
		$datos['submenu'] = $this->idiomas->idiomas_instalados();
		$datos['cuerpo'] = $contenido['pagina_productos'][0];
		$datos['servicios'] = $this->modelo->obtener_contenido('servicios', $idioma);
		
		
		
		
		$datos['idioma'] = $idioma;

		//construir el menu
		$this->load->helper('menu');

		//construir el acordeon
		$this->load->helper('productos');
		

		
		//cargar las vistas
		//$this->load->view('pruebas/prueba',$datos);
		
		$this->load->view('templates/header', $datos);
		$this->load->view('paginas/servicios', $datos);
		$this->load->view('templates/footer');
		

	}//fin del metodo index


}//fin de la Clase Crear_alianza
?>