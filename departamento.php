<?php $departamento = new Departamento();

?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Departamentos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Cadastrar Novo Departamento</button>
        </div>
    </div>
</div>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>ID:</th>
                <th>Nome:</th>
                <th>Empresa:</th>
                

            </tr>
        </thead>
        <?php
        $ordem = 'nome';
        foreach ($departamento->findAllDepartamento() as $key => $value) :
        ?>
            <tbody>
                <tr>
                    <td><?php echo $value->id; ?></td>
                    <td><?php echo $value->nome; ?></td>
                    <td><?php echo $value->empresa; ?></td>
                   
                </tr>
            </tbody>

        <?php
        endforeach; ?>

    </table>
</div>