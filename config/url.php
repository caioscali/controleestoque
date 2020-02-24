<?php

$paginaAtual  = isset( $_GET['p'] ) && trim( $_GET['p'] ) != '' ? trim( $_GET['p'] ) : '';
$subPagina    = isset( $_GET['sp'] ) && trim( $_GET['sp'] ) != '' ? trim( $_GET['sp'] ) : '';
$subPagina2   = isset( $_GET['sp2'] ) && trim( $_GET['sp2'] ) != '' ? trim( $_GET['sp2'] ) : '';
$numeroPagina = isset( $_GET['pg'] ) && trim( $_GET['pg'] ) != '' ? trim( $_GET['pg'] ) : '';
$erro         = false;

if(($paginaAtual=='' || $paginaAtual=='home') && file_exists('home.php')){
    $incluir = 'home.php';
}elseif($paginaAtual=='departamento'){
    $incluir = 'departamento.php';
}elseif($paginaAtual=='categoria'){
    $incluir = 'categoria.php';
}elseif($paginaAtual=='produto'){
    $incluir = 'produto.php';
}else{
    $erro = true;    
}

?>