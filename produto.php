<?php 
$produto = new Produto();
    
?>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Produtos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Cadastrar Novo produto</button>
        </div>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Descricao:</th>
                <th>Marca:</th>
                <th>Número de Patrimônio:</th>
                <th>Categora:</th>
                <th>Quantidade:</th>
                <th>Data Cadastro:</th>
                <th>Departamento:</th>
                <th>Empresa:</th>
                

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
                    <td><?php echo $value->marca; ?></td>
                    <td><?php echo $value->numeroPatrimonio; ?></td>
                    <td><?php echo $value->categoria; ?></td>
                    <td><?php echo $value->quantidade; ?></td>
                    <td><?php echo $value->dataCadastro; ?></td>
                    <td><?php echo $value->departamento; ?></td>
                    <td><?php echo $value->empresa; ?></td>
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