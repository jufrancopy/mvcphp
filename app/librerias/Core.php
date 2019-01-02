<?php

class Core{
	protected $controladorActual='paginas';
	protected $metodoActual='index';
	protected $parametros=[];

	
	//Constructor 
	public function __construct(){
		//print_r($this->getUrl());
		$url = $this->getUrl();
		
		//buscar en carpetas controladors si controlador existe
		if(file_exists('../app/controladores/' .ucwords($url[0]). '.php')){
			//si controlador existe sera el default
			$this->controladorActual=ucwords($url[0]);

			//unset indice
			unset($url[0]); 
		}
		//requerir controlador nuevo 
		require_once '../app/controladores/'. $this->controladorActual . '.php';
		$this->controladorActual = new $this->controladorActual;

		//verificar segunda parte de la URL que seria el Metodo
		if(isset($url[1])){
			if (method_exists($this->controladorActual, $url[1])) {
			//chequeamos el metodo
			$this->metodoActual = $url[1];
			
				//unset indice
			unset($url[1]);
			}
			 
		}
		//para probar traer metodo
		//echo $this->metodoActual;

		//obtener los posibles parametros
		$this->parametros = $url ? array_values($url) :[];

		//llamar callback con parametros array
		call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);

	}

	public function getUrl(){
			//echo $_GET['url'];

			if(isset($_GET['url'])){
				$url = rtrim($_GET['url'], '/');
				$url = filter_var($url, FILTER_SANITIZE_URL);
				$url = explode('/', $url);
				return $url; 
			}
		}
}

?>