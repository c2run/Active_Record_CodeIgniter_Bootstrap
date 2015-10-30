<div class="jumbotron">
    <h4>Editar usuario</h4>
    <div class="container" align="right">
  Volver<p><a href="<?php echo base_url();?>"><img src="<?php echo site_url('images/back.png');?>" alt="agregar" height="42" width="42" style="center"></a></p>
    </div>
<?php $id = $datos->id; ?>
<table class="table-responsive" border="0" border-bottom="21px">
  <form action="<?php echo base_url('index.php/prueba/actual');?>" method="post" name="formulario">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <tr>
      <td><label class="label-form">Usuario: </label></td>
      <td><input type="text" name="usuario" value="<?php echo $datos->usuario; ?>" class="input-form" ></td>
      <td><?php echo "<div style ='font:1px/19px Arial,tahoma,sans-serif;color:#ff0000'>".form_error('usuario') ."</div>";?></td>
    </tr>
    <br />
    <tr>
    <td><label class="label-form">Contraseña:  </label></td>
    <td><input type="text" name="pass" value="<?php echo $datos->pass; ?>" class="input-form" ></td>
    <td><?php echo "<div style ='font:1px/19px Arial,tahoma,sans-serif;color:#ff0000'>".form_error('pass') ."</div>";?></td>
  </tr>
    <br />
    <tr>
      <td><label class="label-form">Email:  </label></td>
    <td><input type="text" name="email" value="<?php echo $datos->email; ?>" class="input-form" ></td>
    <td><?php echo "<div style ='font:1px/19px Arial,tahoma,sans-serif;color:#ff0000'>".form_error('email') ."</div>";?></td>
  </tr>
    <br />
    <tr>
      <td><label class="label-form">Dirección:  </label></td>
    <td><input type="text" name="direccion" value="<?php echo $datos->direccion; ?>" class="input-form"></td>
    <td><?php echo "<div style ='font:1px/19px Arial,tahoma,sans-serif;color:#ff0000'>".form_error('direccion') ."</div>";?></td>
  </tr>
    <br />
    <tr>
      <td><button type="submit" class="btn btn-default boton-align center-block">Editar</button></td>
    </tr>
  </table>
  </form>
  <br />
</div>
