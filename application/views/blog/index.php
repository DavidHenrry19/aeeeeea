
	<h3>Usuarios</h3>
	<a href="<?php echo base_url('blog/add'); ?>" class="btn btn-primary">Agregar Usuario</a>
	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<td>ID</td>
				<th>Usuario</th>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Telefono</th>
				<th>Correo</th>
				<th>Direccion</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			
			 foreach($blogs as $blog): 
		?>
			<tr>
				<td><?php echo $blog->usua_id; ?></td>
				<td><?php echo $blog->usua_login; ?></td>
				<td><?php echo $blog->usua_codigo; ?></td>
				<td><?php echo $blog->usua_nombres; ?></td>
				<td><?php echo $blog->usua_apellidos; ?></td>
				<td><?php echo $blog->usua_telefono; ?></td>
				<td><?php echo $blog->usua_email; ?></td>
				<td><?php echo $blog->usua_direccion; ?></td>
				<td>
					<a href="<?php echo base_url('blog/edit/'.$blog->usua_id); ?>" class="btn btn-info">Editar</a>
					<a href="<?php echo base_url('blog/delete/'.$blog->usua_id); ?>" class="btn btn-danger" >Eliminar</a>
				</td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
