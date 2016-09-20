<?php

class Idiomamodel extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('array');
	}//fin del constructor de la clase

	public function existe_idioma_browser($idioma_por_default){

		//obtener el idioma del nevegador
		$idioma_browser = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);

		//variables para la funcion
		$tablas = array('contacto','crear_alianza','encabezado','pagina_productos','quienes_somos');
		$existe = 0;
		$contador = 0;
		$resultado = false;

		//contar la cantidad de tablas
		foreach ($tablas as $tabla){
			$contador++;
		}//fin contar tablas

		//buscar idioma del navegador en la BDD's
		foreach ($tablas as $tabla) {
			//inicializar $ejecutar
			$ejecutar = 0;

			//crear la consulta
			$this->db->select("idioma");
			$this->db->from($tabla);
			$this->db->where("idioma",$idioma_browser);

			//ejecutar y almacenar la consulta
			$ejecucion = $this->db->count_all_results();

			//si el resultado es = a 1
			if($ejecucion == 1){
				$existe++;
			}
		}//fin foreach

		//comparar la existencia con la cantidad de tablas
		if($contador == $existe){
			$resultado = $idioma_browser;
		}
		else{
			$resultado = $idioma_por_default;
		}

		//regresar valor
		return $resultado;
	}//fin del metodo leer_idioma

	public function idiomas_instalados(){
		//variables para la funcion
		$resultado = '';

		//consulta de idiomas
		$idiomas = $this->db->query('SELECT codigo_lenguaje, nombre_lenguaje from lenguajes');

		$arr_asoc = $idiomas->result_array();
		$nuevakey = '';

		foreach ($arr_asoc as $array) {
			foreach($array as $llave => $contenido){
				if($llave == 'codigo_lenguaje'){
					$resultado[$contenido] = '';
					$nuevakey = $contenido;
				}//fin if
				elseif($llave == 'nombre_lenguaje'){
					$resultado[$nuevakey] = $contenido;
					$nuevakey = '';
				}//fin elseif
			}//fin foreach array
		}//fin foreach array asociativo


		return $resultado;

	}//fin metodo idiomas_instalados
	
}//fin de la clase Idiomamodel