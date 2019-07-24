<?php
include('../include/header.php');
include('../include/lateral.php');
include('../controller/logica.php');
include('../conecta.php');

$estados = listaEstados($conn);
?>  
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <form action="../controller/cadastrar.php" method="POST" class="form">
                <div class="form-group">
                    <label for="exampleInputNome">Nome</label>
                    <input class="form-control" type="text" aria-describedby="emailHelp" placeholder="Nome Completo" name="nome">
                </div>
                <div class="form-group">
                    <label for="exampleInputDocumento">Documento</label>
                    <input class="form-control" type="text" placeholder="Documento" name="documento">
                </div>               
                <div class="form-group">
                    <label for="exampleInputCep">CEP</label>
                    <input class="form-control" id="cep" type="text" placeholder="00000-000" name="cep">
                </div>  
                <div class="form-group">
                    <label for="exampleInputEndereco">Endereço</label>
                    <input class="form-control" type="text" placeholder="Endereço completo" name="endereco">
                </div> 
                <div class="form-group">
                    <label for="exampleInputBairo">Bairro</label>
                    <input class="form-control" type="text" placeholder="Bairro" name="bairro">
                </div>
                <div class="form-group">
                    <label for="exampleInputCidade">Cidade</label>
                    <input class="form-control" type="text" placeholder="Cidade" name="cidade">
                </div>
                <div class="form-group">
                    <label for="exampleInputEstado">Estado</label>
                    <select class="form-control" name="estado">
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select> 
                </div>
                <div class="form-group">
                    <label for="exampleInputCidade1">Telefone</label>
                    <input class="form-control" type="text" name="telefone">
                </div>
                <div class="form-group">
                    <label for="exampleInputCidade1">E-mail</label>
                    <input class="form-control" type="text" placeholder="email" name="email">
                </div>
                <input type="hidden" name="ativo" value="1">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </form>
        </div>
    </div>
</main>
<?php
include('../include/footer.php');
?>
    