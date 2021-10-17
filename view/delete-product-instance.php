<?php
    require_once "../Model/ProdutoDAO.php";
    require_once "../Controller/Produto.php";
    $produto = new Produto();
    $produtoDao = new ProdutoDAO();
    $produto->setIdProduto($_POST['idProduto']);
    $produtoDao->deleteProduto($produto);
    header("Location:produto/add-produto.php")
?>