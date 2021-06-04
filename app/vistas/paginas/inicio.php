<?php require RUTA_APP .'/vistas/inc/header.php';?>
<div class="container">
	<div class="bg-dark float-right">
		<a href="<?php RUTA_URL; ?>paginas/agregar/">
			<input type="submit" class="btn btn-success" value="Agregar">
		</a>
		
	</div>
	
	<table class="table">
		<thead>
			<tr>
				<th>id</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Teléfono</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<?php foreach($datos['usuarios'] as $usuario): ?>
		<tbody>
			<tr>
				<td><?php echo $usuario->id_usuario; ?></td>
				<td><?php echo $usuario->nombre; ?></td>
				<td><?php echo $usuario->email; ?></td>
				<td><?php echo $usuario->telefono; ?></td>
				<td><a href="<?php RUTA_URL; ?>paginas/editar/<?php echo $usuario->id_usuario; ?>">Editar</a></td>
				<td><a href="<?php RUTA_URL; ?>paginas/borrar/<?php echo $usuario->id_usuario; ?>">Borrar</a></td>
			</tr>
			<?php endforeach;  ?>
		</tbody>
	</table>
	<?php require RUTA_APP .'/vistas/inc/footer.php';?>
</div>