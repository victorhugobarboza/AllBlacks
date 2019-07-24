<?php

include('../conecta.php');

ini_set('default_charset', 'UTF-8');

/* PEGA O ARQUIVO XML */
$xml = simplexml_load_file($_FILES['file-input']['tmp_name']); /* Lê o arquivo XML e recebe um objeto com as informações */
//$xml = new SimpleXMLElement($_FILES['file-input']['tmp_name']);
//print_r($xml);
/* FAZ A GRAVAÇÃO DO XML NO BANCO */
$x = '';
foreach ($xml as $torcedor) {
 mysqli_query($conn, "INSERT INTO tb_torcedor (torcedor_nome, torcedor_documento, torcedor_cep, torcedor_endereco,
                      torcedor_bairro, torcedor_cidade, torcedor_uf, torcedor_telefone, torcedor_email, torcedor_ativo) 
                      VALUES 
                      ('{$torcedor->attributes()->nome}', '{$torcedor->attributes()->documento}', '{$torcedor->attributes()->cep}', '{$torcedor->attributes()->endereco}',
                       '{$torcedor->attributes()->bairro}', '{$torcedor->attributes()->cidade}', '{$torcedor->attributes()->uf}',
                      '{$torcedor->attributes()->telefone}', '{$torcedor->attributes()->email}', '{$torcedor->attributes()->ativo}')");
    //mysqli_query($conn,$query) or die("Erro ao tentar cadastrar registro");
    // mysqli_close($conn);
}


echo "<script type=\"text/javascript\">
        alert(\"Dados salvos com sucesso!\");
        window.location = \"../view/torcedor-lista.php\"
      </script>";

