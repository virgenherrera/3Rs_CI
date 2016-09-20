<?php

function acordeon_productos($campos = array(), $siteurl){
	$valor_regresado = '';

	foreach ($campos as $campo) {
		$valor_regresado .= '<h3>' . $campo['nombre_producto'] . '</h3><div>';
		$valor_regresado .= '<img src="' . $siteurl .'images/productos/' . $campo['imagen_producto'] . '">';
		$valor_regresado .=  '<p>' .$campo['descripcion_producto'] .  '</p></div>';
	}

	return $valor_regresado;
	

}//fin de la funcion acordeon

function acordeon_servicios($campos = array(), $siteurl){
	$valor_regresado = '';

	foreach ($campos as $campo) {
		$valor_regresado .= '<h3>' . $campo['nombre_servicio'] . '</h3><div>';
		if(isset($campo['imagen_servicio'])){
			$valor_regresado .= '<img src="' . $siteurl .'images/servicios/' . $campo['imagen_servicio'] . '">';
		}		
		$valor_regresado .=  '<p>' .$campo['descripcion_servicio'] .  '</p></div>';
	}

	return $valor_regresado;
	

}//fin de la funcion acordeon
?>