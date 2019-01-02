<?php
include_once RUTA_APP .'/vistas/inc/header.php';

?>


<p><?php echo $datos['titulo']?></p>
<small><?php echo $datos['sub-titulo']?></small>

<!--
<ul>
	<?php foreach($datos['articulos'] as $articulo): ?>
		<li><?php echo $articulo->titulo; ?></li>
	<?php endforeach; ?>	
</ul>
-->


<?php
include_once RUTA_APP .'/vistas/inc/footer.php';
?>