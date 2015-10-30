
<div class="jumbotron">
  <h4>Usuarios Base de datos</h4>
<div class="container" align="right">
Agregar<p><a href="<?php echo base_url('index.php/ingresar');?>"><img src="images/add.png" alt="agregar" height="42" width="42" style="center"></a></p>
</div>
<p>Buscar  » <input name="buscador" id="buscador" type="text" /></p>

<table class="table table-hover " id="lista" border="1">
  <thead>
    <tr class="success">
      <th>ID:</th>
      <th>Usuario</th>
      <th>Contraseña:</th>
      <th>Email :</th>
      <th>Dirección: </th>
      <th>Editar </th>
      <th>Borrar </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php foreach($datos as $row){?>
      <td><?php echo $row->id;?></td>
      <td><?php echo $row->usuario;?></td>
      <td><?php echo $row->pass;?></td>
      <td><?php echo  $row->email;?></td>
      <td><?php echo $row->direccion;?></td>
      <?php $id = $row->id; ?>
      <td><a href="<?php echo site_url('index.php/prueba/editar/'.$id);?>"><img src="images/editar.png" alt="Editar" height="25" width="25"></a></td>
      <td><a href="<?php echo site_url('index.php/prueba/borrar/'.$id);?>"><img src="images/eliminar.png" alt="Eliminar" height="22" width="22"></a></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</div>
