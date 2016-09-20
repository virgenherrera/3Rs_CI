<?php

	function menu($menu,$submenu){

		unset($menu['id_encabezado']);
		unset($menu['idioma']);

		$regresar_menu = '<nav class="Tw3rs-nav clearfix"><ul class="Tw3rs-hmenu">';
		
		foreach($menu as $link => $texto){
			if($link !== 'link_idioma'){
				$regresar_menu .= '<li><a href="' .$link . '">'. $texto .'</a></li>';
			}
			else{
				$regresar_menu .= '<li><a href="#">'. $texto .'</a><ul>';
				//construir submenu de idiomas
				foreach ($submenu as $link => $texto) {
					$regresar_menu .= '<li><a href="'. $link . '">' . $texto . '</a></li>';
				}//fin foeach submenu
				$regresar_menu .= '</ul></li>';
			}
		}//fin foreach
		$regresar_menu .= '</ul></nav>';
		return $regresar_menu;
	}//Fin de la funcion


?>