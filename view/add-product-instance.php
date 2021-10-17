<?php
    require_once "../Model/ProdutoDAO.php";
    require_once "../Controller/Produto.php";
    $produto = new Produto();
    $produtoDao = new ProdutoDAO();
    $produto->setNomeProduto($_POST['name']);
    $produto->setQuantidadeProduto($_POST['quantidade']);
    $produto->setPreco($_POST['preco']);
    $produto->setDescricao($_POST['descricao']);
    $produtoDao->insereProduto($produto);
    header("Location:produto/add-produto.php")
?>