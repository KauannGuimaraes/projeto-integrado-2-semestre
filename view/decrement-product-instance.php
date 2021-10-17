<?php
    require_once "../Model/ProdutoDAO.php";
    require_once "../Controller/Produto.php";
    $produto = new Produto();
    $produtoDao = new ProdutoDAO();
    $decremento = $_POST['quantidade'];
    $produto->setIdProduto($_POST['idProduto']);
    $quantidade = $produto->getQuantidadeProduto() - $decremento;
    $produto->setQuantidadeProduto($quantidade);
    $produtoDao->decrementaProduto($produto);
    header("Location:produto/decrement-produto.php")
?>