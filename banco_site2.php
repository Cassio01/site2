<?php
$bdServidor = "127.0.0.1";
$bdUsuario = "site2";
$bdSenha = "site2";
$bdBanco = "site2";

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if (mysqli_connect_errno()) {
    echo "Não foi possível conectar ao BANCO";
    echo mysqli_connect_error();
    die();
}

function editar($conexao, $dado)
{
    $sqlUpdate = "UPDATE cadastro SET nome = '{$dado['nome']}',
                                      email = '{$dado['email']}',
                                      telefone = '{$dado['telefone']}'
                                      WHERE id = '{$dado['id']}'";
    mysqli_query($conexao, $sqlUpdate);
}

function b_dado($conexao, $id)
{
    $sqlBuscar = 'SELECT * FROM cadastro WHERE id = ' . $id;
    $result = mysqli_query($conexao, $sqlBuscar);
    return mysqli_fetch_assoc($result);
}

function excluir($conexao, $id){
    $sqlRemover = "DELETE FROM cadastro WHERE id = {$id}";
    mysqli_query($conexao,$sqlRemover);
}

function gravar_dados($conexao, $dados)
{
    $sqlGravar = "INSERT INTO cadastro(nome, email, telefone)
                  VALUES ('{$dados['nome']}','{$dados['email']}','{$dados['telefone']}')";
    mysqli_query($conexao, $sqlGravar);
}

function listar_dados($conexao)
{
    $sqlListarTodos = "SELECT * FROM cadastro";
    $result = mysqli_query($conexao, $sqlListarTodos);
    $listas = [];
    while ($lista = mysqli_fetch_assoc($result)) {
        $listas[] = $lista;
    }
    return $listas;
}