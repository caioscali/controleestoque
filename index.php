<?php 

  //header("Content-Type: text/html; charset=UFT-8",true); 

  function __autoload($class_name){
    require_once 'classes/' . $class_name . '.class.php';
  }
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
    <div class="container">
      <header class="masthead">
        <h1 class="muted">Controle de Estoque</h1>
        <nav class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <a class="brand" href="home">Página inicial</a>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle " data-toggle="dropdown">Cadastros <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li ><a href="pessoa">Departamento</a></li>
                    <li ><a href="dependente">Produto</a></li>
                    <li ><a href="sessao">Categoria</a></li>
                  </ul>
                </li>
              </ul>
      			</div>
  		    </div>
  			</nav>
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
    </div>
  </body>
</html>
