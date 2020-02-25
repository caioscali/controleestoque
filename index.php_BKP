<?php 

  //header("Content-Type: text/html; charset=UFT-8",true); 

  function __autoload($class_name){
    require_once 'classes/' . $class_name . '.class.php';
  }

  require_once 'config/url.php';
?>

<!DOCTYPE HTML>
<html land="pt-BR">
  <head>
    <meta http-equiv="content-Type" content="text/html; charset=UTF-8" /> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Controle de Estoque</title>
    <meta name="author" content="Caio Cezar Scali"/>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/jQuery.js"></script>
    <script src="js/bootstrap.js"></script>
  </head>
  <body>
    
      <header class="masthead">
        <?php include_once("menu.php") ?>
  		</header>
      <?php
        if($erro==true){
          echo('<p align="center" class="erroTitulo">Erro 404 - Página não encontrada!</p>');
          echo('<br /><br />');
          echo('<p align="center" class="erroTexto">A página solicitada não foi encontrada,<br />certifique-se de ter digitado o endereço corretamente.</p>');
        }else{
          include_once($incluir);
        }
      ?>
    
  </body>
</html>
