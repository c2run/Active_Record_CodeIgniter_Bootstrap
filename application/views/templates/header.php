<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=$title?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url().'css/bootstrap.min.css' ?>" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <style>.resaltar{background-color:#FF0;}</style>
    <script type='text/javascript'>
        $.expr[':'].icontains = function(obj, index, meta, stack){
        return (obj.textContent || obj.innerText || jQuery(obj).text() || '').toLowerCase().indexOf(meta[3].toLowerCase()) >= 0;
        };
        $(document).ready(function(){
            $('#buscador').keyup(function(){
                         buscar = $(this).val();
                         $('#lista tr').removeClass('resaltar');
                                if(jQuery.trim(buscar) != ''){
                                   $("#lista tr:icontains('" + buscar + "')").addClass('resaltar');
                                }
                });
        });
     </script>

    </head>
<body>
  <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url(); ?>">Mi Proyecto PHP</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?=base_url();?>">Home</a></li>
              <li><a href="<?php echo base_url('index.php/ingresar');?>">Ingresar</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
