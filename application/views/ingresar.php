<div class="jumbotron">
<h4>Ingresar Nuevo usuario</h4>
<div class="container" align="right">
Volver<p><a href="<?php echo base_url();?>"><img src="../images/back.png" alt="volver" height="42" width="42" style="center"></a></p>
</div>
<br />

  <?php  /*echo validation_errors();  */?>
    <table class="table-responsive" border="0" border-bottom="21px">
  <form action="<?php echo base_url('index.php/prueba/insertar');?>" method="post" name="formulario">
    <br />
    <tr>
    <td ><label class="label-form">Usuario:</label></td>
    <td>
      <input type="text" name="usuario" value="<?php echo set_value('usuario');?>" placeholder="Ingrese su nombre de usuario" class="input-form form_validation">
    </td>
  <td><?php echo "<div style ='font:1px/19px Arial,tahoma,sans-serif;color:#ff0000'>".form_error('usuario') ."</div>";?></td>
  </tr>
  <tr>
    <td><label class="label-form">Contraseña:  </label></td>
    <td>
    <input type="text" name="pass" value="<?php echo set_value('pass');?>" placeholder="Ingrese su contraseña" class="input-form" >
  </td>
  <td><?php echo "<div style ='font:1px/19px Arial,tahoma,sans-serif;color:#ff0000'>".form_error('pass')."</div>";?></td>
  </tr>
  <tr>
    <td><label class="label-form">Email:  </label></td>
    <td>
      <input type="text" name="email" value="<?php echo set_value('email');?>" placeholder="Ingrese su email" class="input-form" >
    </td>
    <td><?php echo "<div style ='font:1px/19px Arial,tahoma,sans-serif;color:#ff0000'>".form_error('email')."</div>";?></td>
  </tr>
<tr>
  <td><label class="label-form">Dirección:  </label></td>
  <td>
    <input type="text" name="direccion" value="<?php echo set_value('direccion');?>" placeholder="Ingrese su dirección" class="input-form">
</td>
<td><?php echo "<div style ='font:1px/19px Arial,tahoma,sans-serif;color:#ff0000'>".form_error('direccion')."</div>";?></td>
</tr>
<tr>
  <td>
    <button type="submit" class="btn btn-default boton-align ">Enviar</button>
  </td>
</tr>
  </table>
  </form>
<br />
</div>
