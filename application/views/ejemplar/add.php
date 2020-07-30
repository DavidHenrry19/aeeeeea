
	<h3>Nuevo Usuario</h3>
	<a href="<?php echo base_url('ejemplar/index'); ?>" class="btn btn-default">Back</a>
	<form action="<?php echo base_url('ejemplar/submit') ?>" method="post" class="form-horizontal">
		<div class="form-group">
			<label for="titulo" class="col-md-2 text-right">Titulo</label>
			<div class="col-md-10">
				<input type="text" name="ejem_titulo" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="editorial" class="col-md-2 text-right">Editorial</label>
			<div class="col-md-10">
				<input type="text" class="form-control" name="ejem_editorial">
			</div>
		</div>
		<div class="form-group">
			<label for="paginas" class="col-md-2 text-right">paginas</label>
			<div class="col-md-10">
				<input type="text" class="form-control" name="ejem_paginas">
			</div>
		</div>
		<div class="form-group">
			<label for="isbn" class="col-md-2 text-right">Serie</label>
			<div class="col-md-10">
				<input type="text" class="form-control" name="ejem_isbn">
			</div>
		</div>
		<div class="form-group">
			<label for="idioma" class="col-md-2 text-right">idioma</label>
			<div class="col-md-10">
				<input type="text" class="form-control" name="ejem_idioma">
			</div>
		</div>
		<div class="form-group">
			<label for="portada" class="col-md-2 text-right">Portada</label>
			<div class="col-md-10">
				<input type="text" class="form-control" name="ejem_portada">
			</div>
		</div>
		<div class="form-group">
			<label for="digital" class="col-md-2 text-right">Digital</label>
			<div class="col-md-10">
				<input type="text" class="form-control" name="ejem_digital">
			</div>
		</div>
		<div class="form-group">
			<label for="audio" class="col-md-2 text-right">Audio</label>
			<div class="col-md-10">
				<input type="text" class="form-control" name="ejem_audio">
			</div>
		</div>
		<div class="form-group">
			<label for="resumen" class="col-md-2 text-right">Resumen</label>
			<div class="col-md-10">
				<input type="text" class="form-control" name="ejem_resumen">
			</div>
		</div>
		<div class="form-group">
			<label for="valoracion" class="col-md-2 text-right">Valoracion</label>
			<div class="col-md-10">
				<input type="text" class="form-control" name="ejem_valoracion">
			</div>
		</div>
		<div class="form-group">
			<label for="año" class="col-md-2 text-right">Año</label>
			<div class="col-md-10">
				<input type="text" class="form-control" name="ejem_anio">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 text-right"></label>
			<div class="col-md-10">
				<input type="submit" name="btnSave" class="btn btn-primary" value="Guardar">
			</div>
		</div>
	</form>
	
