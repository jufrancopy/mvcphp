<?php
//Clase Controlador principal
//se encarga de poder cargar los modelos y las vistas

class Controlador{
	//carga el modelo
	public function modelo($modelo){
		//carga el modelo
		require_once '../app/modelos/' . $modelo . '.php';
		//instanciar el modelo
		return new $modelo();
	}

	//carga la vista
	public function vista($vista, $datos =[]){
		//chequear si el archivo vista existe
		if (file_exists('../app/vistas/' . $vista . '.php')) {
			require_once '../app/vistas/' . $vista . '.php';
		}
		else{
			//si no existe el archivo de vista mostrar mensaje
			die('Vista no existe');
		}
	}
}
?>