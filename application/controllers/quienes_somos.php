<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quienes_somos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('idiomamodel', 'idiomas');
	}

	public function index(){

		//guardar el idioma en la sesion
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
		$contenido = $this->modelo->contenido_index($idioma,array('encabezado', 'quienes_somos', 'pagina_productos'));
		$datos['url'] = base_url();
		$datos['titulo'] = 'Pagina principal';
		$datos['menu'] = $contenido['encabezado'][0];
		$datos['submenu'] = $this->idiomas->idiomas_instalados();
		$datos['cuerpo'] = $contenido['quienes_somos'][0];
		$datos['txproductos'] = $contenido['pagina_productos'][0];
		
		
		$productos_y_servicios = $this->modelo->proser_rand($idioma);
		$datos['productos'] = $productos_y_servicios['productos'];
		$datos['servicios'] = $productos_y_servicios['servicios'];
		$datos['idioma'] = $idioma;

		//construir el menu
		$this->load->helper('menu');
		

		
		//cargar las vistas
		//$this->load->view('pruebas/prueba',$datos);
		
		$this->load->view('templates/header_index', $datos);
		$this->load->view('paginas/quienes_somos', $datos);
		$this->load->view('templates/footer');
		

	}//fin del metodo index


}//fin de la clase Paginas