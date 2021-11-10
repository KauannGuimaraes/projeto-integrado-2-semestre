<?php
    require_once "../Model/ClienteDAO.php";
    require_once "../Controller/Cliente.php";
    $cliente = new Cliente();
    $clienteDao = new ClienteDAO();
    $cliente->setNomeCliente($_POST['nome']);
    $cliente->setEnderecoCliente($_POST['endereco']);
    $clienteDao->insereCliente($cliente);
    header("Location:produto/decrement-produto.php")
?>