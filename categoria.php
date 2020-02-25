<?php 
$categoria = new Categoria();
    //Cadastro de Categoria
if(isset($_POST['cadastrar'])):
	
	$descricao = $_POST['descricao'];
	$categoria->setDescricao($descricao);

	$categoria->insert();

endif;

if(isset($_POST['excluir'])):

    $id = $_POST['id'];

    $categoria->desativar($id);

endif;
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Categorias</h1>
	
	<div class="btn-toolbar mb-2 mb-md-0">
		
		<div class="btn-group mr-2">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Cadastrar Nova Categoria</button>
		</div>
	</div>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Categoria:</th>
                <th>Ação:</th>
            </tr>
        </thead>
        <?php
        $ordem = 'descricao';
        //$departamento = findAllDepartamento();
        foreach ($categoria->findAll() as $key => $value) :
            ?>
            <tbody>
                <tr>
                    <td><?php echo $value->descricao; ?></td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mymodal" onclick="load.modal('','')">Alterar</button>
                        <form class="form_excluir" method="post" style="float: left; margin: 0 15px">
                            <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                            <button name="excluir" type="submit" onclick="fn_excluir();" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                
                </tr>
            </tbody>

    <?php
        endforeach; 
    ?>
    </table>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<form class="col-auto " method="post">
				<div class="form-group" >
					<label>Descricao:</label>
					<input type="text" class="form-control" id="descricao" name="descricao">
				</div>
				<input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar"> 
			</form>
		</div>
	</div>
</div>

