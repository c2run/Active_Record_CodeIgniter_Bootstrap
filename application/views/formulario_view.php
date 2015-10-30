<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-9" />
<script src="http://code.jquery.com/jquery-1.5.min.js"></script>
</head>
<body>
  <h3>Agregar registro</h3>
  <?php echo form_open('index.php/prueba/insertar');?>
  <?php

  $titulo = array(
    'name' => 'titulo',
  );
  $comentario = array(
    'name' => 'comentario',
  );
  ?>
  <label>Título</label>
  <?php echo form_input($titulo);?>
  <hr />
  <label>Comentario</label>
  <?php echo form_textarea($comentario);?>
  <input type="submit" name="submit" value="submit">
  <?php echo form_close();?>
  <hr />
  <h1> Listar datos de la base de datos</h1>
  <?php
    foreach($datos as $row)
    {
      echo "<h3>ID: ".$row->id_noticias."</h3> \n";
      echo "<h3>titulo :</h3> <p>". $row->titulo."</p> \n";
      echo "<h3>comentario: </h3> <p>".$row->comentarios."</p> \n";

  ?>
  <a href="<?php echo site_url('index.php/prueba/editar/'.$row->id_noticias)?>">Editar</a>
  <a href="<?php echo site_url('index.php/prueba/borrar/'.$row->id_noticias)?>">Borrar</a>
  <hr />
  <?php } ?>
  <?php $id = $row->id_noticias; ?>

  <body>
  </html>
