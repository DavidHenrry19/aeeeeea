
	<h3>Libros</h3>
	<a href="<?php echo base_url('ejemplar/add'); ?>" class="btn btn-primary">Agregar ejemrio</a>
	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<td>ID</td>
				<th>Titulo</th>
				<th>Editorail</th>
				<th>Paginas</th>
				<th>ISBN</th>
				<th>idioma</th>
				<th>Portada</th>
				<th>Digital</th>
				<th>Audio</th>
				<th>Resumen</th>
				<th>Valoracion</th>
				<th>Año</th>
				<th>Prestados</th>
				<th>Opciones</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			
			 foreach($blogs as $blog): 
		?>
			<tr>
				<td><?php echo $blog->ejem_id; ?></td>
				<td><?php echo $blog->ejem_titulo; ?></td>
				<td><?php echo $blog->ejem_editorial; ?></td>
				<td><?php echo $blog->ejem_paginas; ?></td>
				<td><?php echo $blog->ejem_isbn; ?></td>
				<td><?php echo $blog->ejem_idioma; ?></td>
				<td><?php echo $blog->ejem_portada; ?></td>
				<td><?php echo $blog->ejem_digital; ?></td>
				<td><?php echo $blog->ejem_audio; ?></td>
				<td><?php echo $blog->ejem_resumen; ?></td>
				<td><?php echo $blog->ejem_valoracion; ?></td>
				<td><?php echo $blog->ejem_anio; ?></td>
				<td><?php echo $blog->ejem_nprestamos; ?></td>
				<td>
					<a href="<?php echo base_url('ejemplar/edit/'.$blog->ejem_id); ?>" class="btn btn-info">Editar</a>
					<a href="<?php echo base_url('ejemplar/delete/'.$blog->ejem_id); ?>" class="btn btn-danger" >Eliminar</a>
				</td>
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
