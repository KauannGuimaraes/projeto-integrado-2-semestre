<?php
    require_once "../Model/ClienteDAO.php";
    require_once "../Controller/Cliente.php";
    $cliente = new Pessoa();
    $clienteDao = new ClienteDAO();
    $cliente->setNomePessoa($_POST['nome']);
    $cliente->setEnderecoPessoa($_POST['endereco']);
    $clienteDao->insereFuncionario($cliente);
    header("Location:produto/decrement-produto.php")
?>