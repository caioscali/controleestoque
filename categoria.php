<?php 
	$categoria = new Categoria();
    //Cadastro de Categoria
    if( isset($_POST['cadastrar'])):

    	$descricao = $_POST['descricao'];
    	$categoria->setDescricao($descricao);

    	$categoria->insert();

    endif;
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Categorias</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    	<form class="col-auto ">
	    	<div class="form-group" method='post'>
                <label>Descricao:</label>
                <input type="text" class="form-control" id="descricao">
            </div>
             <input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar"> 
        </form>
        <div class="btn-group mr-2"><!-- 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Cadastrar Nova Categoria</button> -->
        </div>
    </div>
</div>

