<?php

include('../controller/logica.php');
include('../conecta.php');

$nome = $_POST['nome'];
$documento = $_POST['documento'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$ativo = $_POST['ativo'];

$cadastrar = cadastrarTorcedor($conn, $nome, $documento, $cep, $endereco, $bairro, $cidade, $estado, $telefone, $email, $ativo);

if ($cadastrar) {
    $result = $cadastrar;
    if (!isset($result)) {
        echo "<script type=\"text/javascript\">
		alert(\"Usuário não pode ser cadastrado!\");
                window.location = \"../view/cadastro-torcedor.php\"
              </script>";
    } else {
        echo "<script type=\"text/javascript\">
                alert(\"Salvo com sucesso!\");
                window.location = \"../view/cadastro-torcedor.php\"
              </script>";
    }
} 
