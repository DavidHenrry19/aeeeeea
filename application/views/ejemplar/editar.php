<h3 class="alert alert-info">Editar Usuario <i class="fas fa-user-edit"></i></h3>
<div class="container-fluid bg-light ">
    <div class="row justify-content-center">
      <div class="col-md-5 ">
          <div class="card ml-auto sombra">
              <div class="card-body">
			  <form action="<?php echo base_url('ejemplar/cambiar') ?>" method="post" class="form-horizontal">
				<input type="hidden" name="id" value="<?php echo $reg->ejem_id; ?>">
				</div>
                    <div class="form-group row">
                        <label >Titulo</label>
                        <input type="text" value="<?php echo $reg->ejem_titulo; ?>"class="form-control" name="titulo">
                    </div>
                    <div class="form-group row">
                        <label >Editorial</label>
                        <input type="text" value="<?php echo $reg->ejem_editorial; ?>" class="form-control" name="editorial">                     
                    </div>
                    <div class="form-group row">
                        <label >Paginas</label>                       
                        <input type="text"value="<?php echo $reg->ejem_paginas; ?>" class="form-control" name="pagina">                       
                    </div>
                    <div class="form-group row">
                        <label >isbn</label>                       
                        <input type="text" value="<?php echo $reg->ejem_isbn; ?>" class="form-control" name="isbn">                       
                    </div>
                    <div class="form-group row">
                        <label >Idioma</label>                        
                        <input type="text" value="<?php echo $reg->ejem_idioma; ?>" class="form-control" name="idioma">                        
                    </div>
                    <div class="form-group row">
                        <label >portada</label>                        
                        <input type="text" value="<?php echo $reg->ejem_portada; ?>" class="form-control" name="portada">                        
                    </div>
                    <div class="form-group row">
                        <label >digital</label>                        
                        <input type="text" value="<?php echo $reg->ejem_digital; ?>" class="form-control" name="digital">                        
                    </div>
                    <div class="form-group row">
                        <label >audio</label>                        
                        <input type="text" value="<?php echo $reg->ejem_audio; ?>" class="form-control" name="audio">                        
                    </div>
                    <div class="form-group row">
                        <label >resumen</label>                        
                        <input type="text" value="<?php echo $reg->ejem_resumen; ?>" class="form-control" name="resumen">                        
                    </div>
                    <div class="form-group row">
                        <label >Ejemplo</label>                        
                        <input type="text" value="<?php echo $reg->ejem_tipo_id; ?>" class="form-control" name="ejemptipo">                        
                    </div>
                    <div class="form-group row">
                        <label >Cate</label>                        
                        <input type="text" value="<?php echo $reg->ejem_cate_id; ?>" class="form-control" name="cate">                        
                    </div>
                    <div class="form-group row">
                        <label >Valoracion</label>                        
                        <input type="text" value="<?php echo $reg->ejem_valoracion; ?>" class="form-control" name="valoracion">                        
                    </div>
                    <div class="form-group row">
                        <label >Año</label>                        
                        <input type="text" value="<?php echo $reg->ejem_anio; ?>"class="form-control" name="anio">                        
                    </div>
                    <div class="form-group row">
                        <label >prestamos</label>                        
                        <input type="text" value="<?php echo $reg->ejem_nprestamos; ?>" class="form-control" name="prestamos">                        
                    </div>
				<div class="form-group">
					<center><button type="submit" class="btn btn-primary " >Editar <i class="fas fa-edit"></i></button></center> 
				</div>
			</form>
        </div>
    </div>
</div>
	