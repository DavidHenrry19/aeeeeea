
	<h3>Editar Usuario</h3>
	<a href="<?php echo base_url('blog/index'); ?>" class="btn btn-default">Back</a>
	<form action="<?php echo base_url('blog/update') ?>" method="post" class="form-horizontal">
		<input type="hidden" name="usua_id" value="<?php echo $blog->usua_id; ?>">
		<div class="form-group">
			<label for="username" class="col-md-2 text-right">Username</label>
			<div class="col-md-10">
				<input type="text" name="usua_login" value="<?php echo $blog->usua_login; ?>" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="password" class="col-md-2 text-right">Password</label>
			<div class="col-md-10">
				<input type="password" name="usua_password" value="<?php echo $blog->usua_password; ?>" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="codigo" class="col-md-2 text-right">Codigo</label>
			<div class="col-md-10">
				<input type="text" name="usua_codigo" value="<?php echo $blog->usua_codigo; ?>" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="nombres" class="col-md-2 text-right">Nombre</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->usua_nombres; ?>" name="usua_nombres" class="form-control" required>
			</div>
		</div>
		<div class="form-group">
			<label for="apellidos" class="col-md-2 text-right">Apellido</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->usua_apellidos; ?>" name="usua_apellidos" class="form-control" >
			</div>
		</div>
		<div class="form-group">
			<label for="telefono" class="col-md-2 text-right">Telefono</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->usua_telefono; ?>" name="usua_telefono" class="form-control" >
			</div>
		</div>
		<div class="form-group">
			<label for="email" class="col-md-2 text-right"> email</label>
			<div class="col-md-10">
				<input type="email" value="<?php echo $blog->usua_email; ?>" name="usua_email" class="form-control" >
			</div>
		</div>
		<div class="form-group">
			<label for="direccion" class="col-md-2 text-right">direccion</label>
			<div class="col-md-10">
				<input type="text" value="<?php echo $blog->usua_direccion; ?>" name="usua_direccion" class="form-control" >
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-2 text-right"></label>
			<div class="col-md-10">
				<input type="submit" name="btnUpdate" class="btn btn-primary" value="Editar">
			</div>
		</div>
	</form>
	
