<h1 >Ejemplares </h1>
<a href="<?php echo base_url('ejemplar/formejemplar'); ?>" class="btn btn-info" >Agregar Ejemplar <i class="fas fa-user-plus"></i></a>

<table class='table table-hover'>
    <thead class='thead-light'>
        <tr>
            <th> ID </th>
            <th> Titulo </th>
            <th> Editorial </th>
            <th>Paginas</th>
            <th>Serie</th>
            <th>idioma</th>
            <th>Portada </th>
            <th>Digital</th>
            <th>Audio</th>
            <th>Resumen</th>
            <th>Ejem</th>
            <th>Cate</th>
            <th>Valoracion</th>
            <th>Año</th>
            <th>Prestados</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($registros as $reg): ?>
        <tr>
            <td><?php echo $reg->ejem_id;?></td>
            <td><?php echo $reg->ejem_titulo;?></td>
            <td><?php echo $reg->ejem_editorial;?></td>
            <td><?php echo $reg->ejem_paginas;?></td>
            <td><?php echo $reg->ejem_isbn;?></td>
            <td><?php echo $reg->ejem_idioma;?></td>
            <td><?php echo $reg->ejem_portada;?></td>
            <td><?php echo $reg->ejem_digital;?></td>
            <td><?php echo $reg->ejem_audio;?></td>
            <td><?php echo $reg->ejem_resumen;?></td>
            <td><?php echo $reg->ejem_tipo_id;?></td>
            <td><?php echo $reg->ejem_cate_id;?></td>
            <td><?php echo $reg->ejem_valoracion;?></td>
            <td><?php echo $reg->ejem_anio;?></td>
            <td><?php echo $reg->ejem_nprestamos;?></td>
            <td>
            <a href="<?php echo base_url('ejemplar/editar/'.$reg->ejem_id); ?>" class="btn btn-info">Editar</a>
			<a href="<?php echo base_url('ejemplar/eliminar/'.$reg->ejem_id); ?>" class="btn btn-danger" >Eliminar</a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>