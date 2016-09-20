<?php

class Principalmodel extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}//fin del constructor de la clase

	public function contenido_index($idioma,$tablas = array()){
		//inicializar datos
		$resultado = '';

		foreach($tablas as $tabla){
			//crear la consulta
			$this->db->from($tabla);
			$this->db->where("idioma",$idioma);

			//ejecutar la consulta
			$ejecucion = $this->db->get();

			//almacenar en la variable
			$resultado[$tabla] = $ejecucion->result_array();

		}//fin consulta reiterativa



		//valor a regresar
		return $resultado;

	}//fin del metodo contenido_index()

	public function proser_rand($idioma){

		//consulta reiterativa
		$tablas = array('productos', 'servicios');
		$resultado = '';

		foreach ($tablas as $tabla) {
			$consulta = 'SELECT * FROM ' . $tabla  . ' WHERE idioma = ? ORDER BY RAND() LIMIT 10';
			$consulta = $this->db->query($consulta, $idioma);
			$resultado[$tabla] = $consulta->result_array();
		}

		//valor a regresar
		return $resultado;
	}//fin del metodo proser_rand()

	public function obtener_contenido($tabla, $idioma){
		//recomponer los campos
		$extension_campo = '';
		if($tabla == 'productos'){
			$extension_campo = 'producto';
		}//fin if
		elseif($tabla == 'servicios'){
			$extension_campo = 'servicio';
		}//fin elseif

		$campos = 'nombre_' . $extension_campo . ', descripcion_' . $extension_campo . ', imagen_' . $extension_campo;

		//construir la consulta
		$this->db->select($campos);
		$this->db->from($tabla);
		$this->db->where('idioma',$idioma);

		//ejecutar la consulta
		$ejecucion = $this->db->get();



		return $ejecucion->result_array();
	}//fin del metodo obtener_contenido

}//fin de la clase Principal