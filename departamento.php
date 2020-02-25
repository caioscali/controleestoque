<?php 
    $departamento = new Departamento();
    //Cadastro de Categoria
    if(isset($_POST['cadastrar'])):
 
        $nome = $_POST['nome'];
        $empresa = $_POST['empresa'];
        $departamento->setNome($nome);
        $departamento->setEmpresa($empresa);

        $departamento->insert();

    endif;
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Categorias</h1>
    <form class="col-auto " method="post">
        <div class="form-group" >
            <label>nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" >
        </div>
        <div class="form-group" >
            <label>Empresa:</label>
            <input type="text" class="form-control" id="empresa" name="empresa">
        </div>
        <input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar"> 
    </form>
    <div class="btn-toolbar mb-2 mb-md-0">
        
        <div class="btn-group mr-2"><!-- 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Cadastrar Nova Categoria</button> -->
        </div>
    </div>
</div>