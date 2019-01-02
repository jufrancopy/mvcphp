<?php

	class Paginas extends Controlador{
		public function __construct(){
			$this->articuloModelo = $this->modelo('Articulo');
		//	echo 'Controlador Páginas se cargò';
		}

		public function index(){

			$articulos=$this->articuloModelo->obtenerArticulos();
			$datos=[
				'titulo' => '<h1>Bienvenido a MVC de Julio Franco</h1>',
				'sub-titulo' => 'Programación Orientada a Objetos - Modelo, Vista, Controlador',
				'articulos' => $articulos

				];

				$this->vista('paginas/inicio', $datos);
		}

		public function articulo(){
		$this->vista('paginas/articulo');
		}

		public function actualizar($num_registro){
			echo $num_registro;
		}
	}
?>