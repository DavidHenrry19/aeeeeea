
	<h3>Nuevo Usuario</h3>
	<a href="<?php echo base_url('blog/index'); ?>" class="btn btn-default">Back</a>
	<form action="<?php echo base_url('blog/submit') ?>" method="post" class="form-horizontal">
		<div class="form-group">
			<label for="username" class="col-md-2 text-right">Username</label>
			<div class="col-md-10">
				<input type="text" name="usua_login" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-md-2 text-right">Password</label>
			<div class="col-md-10">
				<input type="password" name="usua_password" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="codigo" class="col-md-2 text-right">Codigo</label>
			<div class="col-md-10">
				<input type="text" name="usua_codigo" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="nombres" class="col-md-2 text-right">nombre</label>
			<div class="col-md-10">
				<input type="text" name="usua_nombres" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="apellidos" class="col-md-2 text-right">apellido</label>
			<div class="col-md-10">
				<input type="text" class="form-control" name="usua_apellidos">
			</div>
		</div>
		<div class="form-group">
			<label for="telefono" class="col-md-2 text-right">telefono</label>
			<div class="col-md-10">
				<input type="text" class="form-control" name="usua_telefono">
			</div>
		</div>
		<div class="form-group">
			<label for="correo" class="col-md-2 text-right">correo</label>
			<div class="col-md-10">
				<input type="email" class="form-control" name="usua_email">
			</div>
		</div>
		<div class="form-group">
			<label for="direccion" class="col-md-2 text-right">direccion</label>
			<div class="col-md-10">
				<input type="text" class="form-control" name="usua_direccion">
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 text-right"></label>
			<div class="col-md-10">
				<input type="submit" name="btnSave" class="btn btn-primary" value="Guardar">
			</div>
		</div>
	</form>
	
