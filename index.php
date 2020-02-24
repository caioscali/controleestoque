<?php 

  //header("Content-Type: text/html; charset=UFT-8",true); 

  function __autoload($class_name){
    require_once 'classes/' . $class_name . '.class.php';
  }
?>

<!DOCTYPE HTML>
<html land="pt-BR">
  <head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" /> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Controle de Estoque</title>
    <meta name="author" content="Caio Cezar Scali"/>
    <link rel="stylesheet" href="css/bootstrap.css" />
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
                <a class="brand" href="home">P&aacute;gina inicial</a>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle " data-toggle="dropdown">Chancelaria <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li ><a href="pessoa">Ir.'.</a></li>
                    <li ><a href="dependente">Dependente</a></li>
                    <li class="divider"></li>
                    <li ><a href="sessao">Sess&atilde;o</a></li>
                    <li ><a href="merito">Merito de Frequencia</a></li>
                    <li ><a href="listarPresenca">Listar Presen&ccedil;a</a></li>
                    <li ><a href="listarPresencaMestre">Listar Presen&ccedil;a de Mestres</a></li>
                    <li ><a href="aniversarios">Aniversariantes do M&ecirc;s</a></li>
                    <li ><a href="anuario">Anuario</a></li>
                    <li class="divider"></li>
                    <li ><a href="pessoaInativa">Ir.'. Adormecidos ou Quitados</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle " data-toggle="dropdown">Secretaria <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li ><a href="cargo">Cargo</a></li>
                    <li class="divider"></li>
                    <li ><a href="cargoPessoa">Diretoria</a></li>
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
