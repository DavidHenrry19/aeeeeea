
	<h3>Editar ejemplar</h3>
	<a href="<?php echo base_url('ejemplar/index'); ?>" class="btn btn-default">Back</a>
	<form action="<?php echo base_url('ejemplar/update') ?>" method="post" class="form-horizontal">
		<input type="hidden" name="ejem_id" value="<?php echo $blog->ejem_id; ?>">
		<div class="form-group">
			<label for="titulo" class="col-md-2 text-right">Nombre</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->ejem_titulo; ?>" name="ejem_titulo" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="editorial" class="col-md-2 text-right">Apellido</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->ejem_editorial; ?>" name="ejem_editorial" class="form-control" >
			</div>
		</div>
		<div class="form-group">
			<label for="paginas" class="col-md-2 text-right">paginas</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->ejem_paginas; ?>" name="ejem_paginas" class="form-control" >
			</div>
		</div>
		<div class="form-group">
			<label for="isbn" class="col-md-2 text-right"> isbn</label>
			<div class="col-md-10">
				<input type="isbn" value="<?php echo $blog->ejem_isbn; ?>" name="ejem_isbn" class="form-control" >
			</div>
		</div>
		<div class="form-group">
			<label for="idioma" class="col-md-2 text-right">idioma</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->ejem_idioma; ?>" name="ejem_idioma" class="form-control" >
			</div>
		</div>
		<div class="form-group">
			<label for="portada" class="col-md-2 text-right">Portada</label>
			<div class="col-md-10">
				<input type="text" class="form-control" value="<?php echo $blog->ejem_portada; ?>" name="ejem_portada">
			</div>
		</div>
		<div class="form-group">
			<label for="digital" class="col-md-2 text-right">Digital</label>
			<div class="col-md-10">
				<input type="text" class="form-control"value="<?php echo $blog->ejem_digital; ?>" name="ejem_digital">
			</div>
		</div>
		<div class="form-group">
			<label for="audio" class="col-md-2 text-right">Audio</label>
			<div class="col-md-10">
				<input type="text" class="form-control"value=" <?php echo $blog->ejem_audio; ?>" name="ejem_audio">
			</div>
		</div>
		<div class="form-group">
			<label for="resumen" class="col-md-2 text-right">Resumen</label>
			<div class="col-md-10">
				<input type="text" class="form-control"value="<?php echo $blog->ejem_resumen; ?>" name="ejem_resumen">
			</div>
		</div>
		<div class="form-group">
			<label for="valoracion" class="col-md-2 text-right">Valoracion</label>
			<div class="col-md-10">
				<input type="text" class="form-control" value="<?php echo $blog->ejem_valoracion; ?>" name="ejem_valoracion">
			</div>
		</div>
		<div class="form-group">
			<label for="año" class="col-md-2 text-right">Año</label>
			<div class="col-md-10">
				<input type="text" class="form-control" value="<?php echo $blog->ejem_anio; ?>" name="ejem_anio">
			</div>
		</div>
		<div class="form-group">
			<label for="prestamos" class="col-md-2 text-right">prestados</label>
			<div class="col-md-10">
				<input type="text" class="form-control" value="<?php echo $blog->ejem_nprestamos; ?>" name="ejem_nprestamos">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 text-right"></label>
			<div class="col-md-10">
				<input type="submit" name="btnUpdate" class="btn btn-primary" value="Editar">
			</div>
		</div>
	</form>
	
