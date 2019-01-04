<?php require RUTA_APP .'/vistas/inc/header.php';?>
<a href="<?php echo RUTA_URL?>/paginas" class="btn btn-light"><i class="fa fa-backward"></i> Volver</a>
<div class="card card-body bg-light mt-5">
<h2>Agregar usuarios</h2>
<form action="<?php echo RUTA_URL; ?>/paginas/agregar" method="POST">
	<div class="form-group">
		<label for="nombre">Nombre:<sup>*</sup></label>
		<input type="text" name="nombre" class="form-control form-control-lg">
	</div>
	<div class="form-group">
		<label for="email">Nombre:<sup>*</sup></label>
		<input type="text" name="email" class="form-control form-control-lg">
	</div>
	<div class="form-group">
		<label for="telefono">Telefono:<sup>*</sup></label>
		<input type="text" name="telefono" class="form-control form-control-lg">
	</div>		
	
	<input type="submit" class="btn btn-success" value="Agregar">
</form>
</div>
<?php require RUTA_APP .'/vistas/inc/footer.php';?>