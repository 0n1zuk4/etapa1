<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$uf = filter_input(INPUT_POST, 'uf', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);


$result_clientes = "INSERT INTO 
cliente (nome, endereco, numero, bairro, cidade, cep, uf, email, cpf)
VALUES ('$nome', '$endereco', '$numero', '$bairro', '$cidade', '$cep', '$uf', '$email', '$cpf')";

$resultado_cliente = mysqli_query($conn, $result_clientes);

if(mysqli_insert_id($conn))
{
    $_SESSION['msg'] = "<p style='color:green'>Cliente cadastrado com sucesso</p>";
    header("Location: listar.php");
}
else
{
    $_SESSION['msg'] = "<p style='color:red'>Cliente nao foi cadastrado com sucesso</p>";
    header("Location: listar.php");
}
