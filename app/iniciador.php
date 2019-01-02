<?php
//Carga de librerias
require_once 'config/configurar.php';
require_once 'helpers/url_helper.php';


//AutoLoad PHP para las Clases
spl_autoload_register(function($nombreClase){
	require_once 'librerias/' .$nombreClase. '.php';	
})
?>