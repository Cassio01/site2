<?php
require "banco_site2.php";
$exibirTabela = true;


if(array_key_exists('nome', $_GET) && $_GET['nome'] != ''){
    $informacoes = [];
    $informacoes['nome'] = $_GET['nome'];
    if(array_key_exists('email', $_GET)){
        $informacoes['email'] = $_GET['email'];
    } else {
        $informacoes['email'] = '';
    }
    if(array_key_exists('telefone', $_GET)){
        $informacoes['telefone'] = $_GET['telefone'];
    } else {
        $informacoes['telefone'] = '';
    }
    gravar_dados($conexao, $informacoes);
}

$listar = listar_dados($conexao);

$informacoes = array(
    'id' => 0,
    'nome' => '',
    'email' => '',
    'telefone' => ''
);

include "template.php";