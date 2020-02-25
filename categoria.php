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
        <div class="btn-group mr-2">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Cadastrar Nova Categoria</button>
        </div>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Descricao:</th>
            </tr>
        </thead>
        <?php
        $ordem = 'descricao';
        $produtos = findAllProdutos();
         foreach ($produtos as $key => $value) :
        ?>
            <tbody>
                <tr>
                    <td><?php echo $value->descricao; ?></td>
                </tr>
            </tbody>
        <?php
         endforeach; ?>
    </table>
</div>




<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form class="col-auto ">
                <div class="row"></div>
                <div class="form-group">
                    <label>Departamento:</label>
                    <select class="form-control">
                        <option>Selecione o Departamento</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Categoria:</label>
                    <select class="form-control">
                        <option>Selecione a Categoria</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Descricao:</label>
                    <input type="text" class="form-control" id="descricao">
                </div>
                <div class="form-group">
                    <label>Marca:</label>
                    <input type="text" class="form-control" id="marca">
                </div>
                <div class="form-group">
                    <label>Número de Patrimonio:</label>
                    <input type="text" class="form-control" id="numeroPatrmonio">
                </div>
                <button type="" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>