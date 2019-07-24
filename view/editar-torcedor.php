<?php
include('../include/header.php');
include('../include/lateral.php');
include('../controller/logica.php');
include('../conecta.php');

$estados = listaEstados($conn);

$id = $_GET['ideditar'];

$torcedor = buscaTorcedor($conn, $id);
?>  
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <form action="../controller/editar.php" method="POST" class="form">
                <input type="hidden" value="<?= $torcedor['torcedor_id']?>" name="id">
                <div class="form-group">
                    <label for="exampleInputNome">Nome</label>
                    <input class="form-control" type="text" aria-describedby="emailHelp" placeholder="Nome Completo" name="nome" value="<?= $torcedor['torcedor_nome'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputDocumento">Documento</label>
                    <input class="form-control" type="text" placeholder="Documento" name="documento" value="<?= $torcedor['torcedor_documento'] ?>">
                </div>               
                <div class="form-group">
                    <label for="exampleInputCep">CEP</label>
                    <input class="form-control" type="text" placeholder="00000-000" name="cep" value="<?= $torcedor['torcedor_cep'] ?>">
                </div>  
                <div class="form-group">
                    <label for="exampleInputEndereco">Endereço</label>
                    <input class="form-control" type="text" placeholder="Endereço completo" name="endereco" value="<?= $torcedor['torcedor_endereco'] ?>">
                </div> 
                <div class="form-group">
                    <label for="exampleInputBairo">Bairro</label>
                    <input class="form-control" type="text" placeholder="Bairro" name="bairro" value="<?= $torcedor['torcedor_bairro'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputCidade">Cidade</label>
                    <input class="form-control" type="text" placeholder="Cidade" name="cidade" value="<?= $torcedor['torcedor_cidade'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEstado">Estado</label>
                    <select class="form-control" name="estado">
                        <option value="AC" <?= $torcedor['torcedor_uf'] == 'AC'?'selected':''?>>Acre</option>
                        <option value="AL" <?= $torcedor['torcedor_uf'] == 'AL'?'selected':''?>>Alagoas</option>
                        <option value="AP" <?= $torcedor['torcedor_uf'] == 'AP'?'selected':''?>>Amapá</option>
                        <option value="AM" <?= $torcedor['torcedor_uf'] == 'AM'?'selected':''?>>Amazonas</option>
                        <option value="BA" <?= $torcedor['torcedor_uf'] == 'BA'?'selected':''?>>Bahia</option>
                        <option value="CE" <?= $torcedor['torcedor_uf'] == 'CE'?'selected':''?>>Ceará</option>
                        <option value="DF" <?= $torcedor['torcedor_uf'] == 'DF'?'selected':''?>>Distrito Federal</option>
                        <option value="ES" <?= $torcedor['torcedor_uf'] == 'ES'?'selected':''?>>Espírito Santo</option>
                        <option value="GO" <?= $torcedor['torcedor_uf'] == 'GO'?'selected':''?>>Goiás</option>
                        <option value="MA" <?= $torcedor['torcedor_uf'] == 'MA'?'selected':''?>>Maranhão</option>
                        <option value="MT" <?= $torcedor['torcedor_uf'] == 'MT'?'selected':''?>>Mato Grosso</option>
                        <option value="MS" <?= $torcedor['torcedor_uf'] == 'MS'?'selected':''?>>Mato Grosso do Sul</option>
                        <option value="MG" <?= $torcedor['torcedor_uf'] == 'MG'?'selected':''?>>Minas Gerais</option>
                        <option value="PA" <?= $torcedor['torcedor_uf'] == 'PA'?'selected':''?>>Pará</option>
                        <option value="PB" <?= $torcedor['torcedor_uf'] == 'PB'?'selected':''?>>Paraíba</option>
                        <option value="PR" <?= $torcedor['torcedor_uf'] == 'PR'?'selected':''?>>Paraná</option>
                        <option value="PE" <?= $torcedor['torcedor_uf'] == 'PE'?'selected':''?>>Pernambuco</option>
                        <option value="PI" <?= $torcedor['torcedor_uf'] == 'PI'?'selected':''?>>Piauí</option>
                        <option value="RJ" <?= $torcedor['torcedor_uf'] == 'RJ'?'selected':''?>>Rio de Janeiro</option>
                        <option value="RN" <?= $torcedor['torcedor_uf'] == 'RN'?'selected':''?>>Rio Grande do Norte</option>
                        <option value="RS" <?= $torcedor['torcedor_uf'] == 'RS'?'selected':''?>>Rio Grande do Sul</option>
                        <option value="RO" <?= $torcedor['torcedor_uf'] == 'RO'?'selected':''?>>Rondônia</option>
                        <option value="RR" <?= $torcedor['torcedor_uf'] == 'RR'?'selected':''?>>Roraima</option>
                        <option value="SC" <?= $torcedor['torcedor_uf'] == 'SC'?'selected':''?>>Santa Catarina</option>
                        <option value="SP" <?= $torcedor['torcedor_uf'] == 'SP'?'selected':''?>>São Paulo</option>
                        <option value="SE" <?= $torcedor['torcedor_uf'] == 'SE'?'selected':''?>>Sergipe</option>
                        <option value="TO" <?= $torcedor['torcedor_uf'] == 'TO'?'selected':''?>>Tocantins</option>
                    </select> 
                </div>
                <div class="form-group">
                    <label for="exampleInputCidade1">Telefone</label>
                    <input class="form-control" type="text" name="telefone" value="<?= $torcedor['torcedor_telefone'] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputCidade1">E-mail</label>
                    <input class="form-control" type="text" placeholder="email" name="email" value="<?= $torcedor['torcedor_email'] ?>">
                </div>
                <input type="submit" class="btn btn-primary" value="Alterar">
            </form>
        </div>
    </div>
</main>
<?php
include('../include/footer.php');
?>
    
