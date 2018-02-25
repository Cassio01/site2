<?php
session_start();
require "banco_site2.php";

$exibirTabela = false;

if(isset($_GET['nome']) && $_GET['nome'] != ''){
    $informacoes = array();
    $informacoes['id'] = $_GET['id'];
    $informacoes['nome'] = $_GET['nome'];
    $informacoes['email'] = $_GET['email'];
    $informacoes['telefone'] = $_GET['telefone'];

    editar($conexao, $informacoes);
    header('Location: cadastro.php');
    die();
}

$informacoes = b_dado($conexao, $_GET['id']);

include "template.php";