<?php

include('../conecta.php');

function listaEstados($conn) {
    $estados = array();
    $query = "SELECT * FROM tb_estados";
    $resultado = mysqli_query($conn, $query);
    while ($estado = mysqli_fetch_assoc($resultado)) {
        array_push($estados, $estado);
    } return $estados;
}

function cadastrarTorcedor($conn, $nome, $documento, $cep, $endereco, $bairro, $cidade, $estado, $telefone, $email, $ativo) {
    $query = "INSERT INTO tb_torcedor (torcedor_nome, torcedor_documento, torcedor_cep, torcedor_endereco, torcedor_bairro, torcedor_cidade, torcedor_uf,
                torcedor_telefone, torcedor_email, torcedor_ativo) VALUES ('{$nome}', '{$documento}','{$cep}', '{$endereco}', '{$bairro}', '{$cidade}',
                '{$estado}', '{$telefone}', '{$email}', '{$ativo}')";
    return mysqli_query($conn, $query);
}

function buscaTorcedores($conn) {
    $torcedores = array();
    $query = "SELECT * FROM tb_torcedor WHERE torcedor_ativo = 1";
    $resultado = mysqli_query($conn, $query);
    while ($torcedor = mysqli_fetch_assoc($resultado)) {
        array_push($torcedores, $torcedor);
    } return $torcedores;
}

function buscaTorcedor($conn, $id) {
    $query = "select * from tb_torcedor where torcedor_id = '{$id}'";
    $resultado = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($resultado);
}

function editarTorcedor($conn, $id, $nome, $documento, $cep, $endereco, $bairro, $cidade, $estado, $telefone, $email) {
    $query = "update tb_torcedor set torcedor_nome = '{$nome}', torcedor_documento = '{$documento}', torcedor_cep = '{$cep}', torcedor_endereco = '{$endereco}', torcedor_bairro = '{$bairro}',
    torcedor_cidade = '{$cidade}', torcedor_uf = '{$estado}', torcedor_telefone = '{$telefone}', torcedor_email = '{$email}' where torcedor_id = '{$id}'";
    //print_r($query);
    return mysqli_query($conn, $query);
}

function exluirTorcedor($conn, $id) {
    $query = "UPDATE tb_torcedor set torcedor_ativo = 0 where torcedor_id = {$id}";
    //print_r($query);
    //exit();
    return mysqli_query($conn, $query);
}

if (isset($_GET['id']) && $_GET['acao'] == 'inativar') {
    $id = $_GET['id'];
    exluirTorcedor($conn, $id);
    header('Location: ../view/torcedor-lista.php?mensagem=inativo');
}

function buscaTorcedoresInativos($conn) {
    $torcedores = array();
    $query = "SELECT * FROM tb_torcedor WHERE torcedor_ativo = 0";
    $resultado = mysqli_query($conn, $query);
    while ($torcedor = mysqli_fetch_assoc($resultado)) {
        array_push($torcedores, $torcedor);
    } return $torcedores;
}

function ativarTorcedor($conn, $id) {
    $query = "UPDATE tb_torcedor set torcedor_ativo = 1 where torcedor_id = {$id}";
    //print_r($query);
    //exit();
    return mysqli_query($conn, $query);
}

if (isset($_GET['id']) && $_GET['acao'] == 'ativar') {
    $id = $_GET['id'];
    ativarTorcedor($conn, $id);
    header('Location: ../view/lista_inativos.php?mensagem=ativo');
}