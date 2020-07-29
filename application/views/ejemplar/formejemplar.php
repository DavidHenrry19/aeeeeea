<h1  class="alert alert-info " >formulario</h1>
<form method="post" action="<?php echo base_url('ejemplar/guardar')?>" class="form-horizontal">
<div class="container-fluid bg-light " >
    <div class="row justify-content-center">
      <div class="col-md-5 ">
          <div class="card ml-auto sombra">
              <div class="card-body">
                <div class="form-group row justify-content-center">
                        <label class="alert alert-info">Nuevo Usuario <i class="fas fa-user-plus"></i></label>  
                    </div>
                    <div class="form-group row">
                        <label >Titulo</label>
                        <input type="text" class="form-control" name="titulo">
                    </div>
                    <div class="form-group row">
                        <label >Editorial</label>
                        <input type="text" class="form-control" name="editorial">                     
                    </div>
                    <div class="form-group row">
                        <label >Paginas</label>                       
                        <input type="text" class="form-control" name="pagina">                       
                    </div>
                    <div class="form-group row">
                        <label >isbn</label>                       
                        <input type="text" class="form-control" name="isbn">                       
                    </div>
                    <div class="form-group row">
                        <label >Idioma</label>                        
                        <input type="text" class="form-control" name="idioma">                        
                    </div>
                    <div class="form-group row">
                        <label >portada</label>                        
                        <input type="text" class="form-control" name="portada">                        
                    </div>
                    <div class="form-group row">
                        <label >digital</label>                        
                        <input type="text" class="form-control" name="digital">                        
                    </div>
                    <div class="form-group row">
                        <label >audio</label>                        
                        <input type="text" class="form-control" name="audio">                        
                    </div>
                    <div class="form-group row">
                        <label >resumen</label>                        
                        <input type="text" class="form-control" name="resumen">                        
                    </div>
                    <div class="form-group row">
                        <label >Ejemplo</label>                        
                        <input type="text" class="form-control" name="ejemptipo">                        
                    </div>
                    <div class="form-group row">
                        <label >Cate</label>                        
                        <input type="text" class="form-control" name="cate">                        
                    </div>
                    <div class="form-group row">
                        <label >Valoracion</label>                        
                        <input type="text" class="form-control" name="valoracion">                        
                    </div>
                    <div class="form-group row">
                        <label >Año</label>                        
                        <input type="text" class="form-control" name="anio">                        
                    </div>
                    <div class="form-group row">
                        <label >prestamos</label>                        
                        <input type="text" class="form-control" name="prestamos">                        
                    </div>
                    
                   <center><button type="submit" class="btn btn-primary " >Guardar <i class="fas fa-save"></i></button></center> 
</form>