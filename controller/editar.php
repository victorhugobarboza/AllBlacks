<?php

include('../controller/logica.php');
include('../conecta.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$documento = $_POST['documento'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$editar = editarTorcedor($conn, $id, $nome, $documento, $cep, $endereco, $bairro, $cidade, $estado, $telefone, $email);


if ($editar) {
    $result = $editar;
    if (!isset($result)) {
        echo "<script type=\"text/javascript\">
		alert(\"Torcedor não pode ser alterado!\");
                window.location = \"../view/editar-torcedor.php\"
             </script>";
    } else {
        echo "<script type=\"text/javascript\">
                alert(\"Altrado com sucesso!\");
		window.location = \"../view/torcedor-lista.php\"
             </script>";
    }
} 


