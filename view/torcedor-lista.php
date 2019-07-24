<?php
include('../include/header.php');
include('../include/lateral.php');
include('../controller/logica.php');
include('../conecta.php');

$torcedores = buscaTorcedores($conn);

?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Lista de Torcedores</h1>
            
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item">Tabela</li>
            <li class="breadcrumb-item active"><a href="#">Tabela Torcedores</a></li>
        </ul>
    </div>
    <?php
    if(isset($_GET['mensagem'])  && $_GET['mensagem'] == 'inativo'){
    ?>
    <p class="alert alert-success">O usuário foi excluído</p>
    <?php
    }
    ?>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Documento</th>
                                <th>Estado</th>
                                <th>Telefone</th>
                                <th>E-mail</th>
                                <th>Ativo</th>
                                <th>Exibir</th>
                                <th>Editar</th>                               
                                <th>Excluir</th>                               
                            </tr>
                        </thead>
                        <tbody>
                           <?php foreach ($torcedores as $torcedor): ?>
                            <tr>
                                <td><?= $torcedor['torcedor_nome'] ?></td>
                                <td><?= $torcedor['torcedor_documento'] ?></td>                                
                                <td><?= $torcedor['torcedor_uf'] ?></td>
                                <td><?= $torcedor['torcedor_telefone'] ?></td>
                                <td><?= $torcedor['torcedor_email'] ?></td>
                                <td><?= $torcedor['torcedor_ativo'] == 1?"Sim":"Não" ?></td>
                                <td><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal<?= $torcedor['torcedor_id'] ?>">Exibir</button></td>
                                <td><a href="editar-torcedor.php?ideditar=<?= $torcedor['torcedor_id'] ?>" class="btn btn-primary btn-sm">Editar</a></td>                               
                                <td><a href="../controller/logica.php?id=<?= $torcedor['torcedor_id'] ?>&acao=inativar" class="btn btn-primary btn-sm">Exluir</a></td>                               
                            </tr>
                            <?php endforeach; ?>                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<?php foreach ($torcedores as $torcedor): ?>
    <div class="modal fade" id="myModal<?= $torcedor['torcedor_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Dados do Torcedor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul style="list-style-type:none;">
                        <li><strong>Nome:</strong> <?= $torcedor['torcedor_nome'] ?></li>
                        <li><strong>Categoria:</strong> <?= $torcedor['torcedor_documento'] ?></li>
                        <li><strong>CEP:</strong> <?= $torcedor['torcedor_cep'] ?></li>
                        <li><strong>Endereço:</strong> <?= $torcedor['torcedor_endereco'] ?></li>
                        <li><strong>Bairro:</strong> <?= $torcedor['torcedor_bairro'] ?></li>
                        <li><strong>Cidade:</strong> <?= $torcedor['torcedor_cidade'] ?></li>
                        <li><strong>Estado:</strong> <?= $torcedor['torcedor_uf'] ?></li>
                        <li><strong>Telefone:</strong> <?= $torcedor['torcedor_telefone'] ?></li>
                        <li><strong>E-mail:</strong> <?= $torcedor['torcedor_email'] ?></li>                       
                        <li><strong>Ativo:</strong> <?= $torcedor['torcedor_ativo'] == 1?"Sim":"Não" ?></li>                       
                    </ul>                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php
include('../include/footer.php');
?>