<?php
    require_once "../Model/ProdutoDAO.php";
    require_once "../Controller/Produto.php";
    $produto = new Produto();
    $produtoDao = new ProdutoDAO();
    $decremento = $_POST['quantidade'];
    echo $decremento;
    $produto->setIdProduto($_POST['idProduto']);
    $quantidade = $produto->getQuantidadeProduto() + $decremento;
    $produto->setQuantidadeProduto($quantidade);
    echo $produto->getQuantidadeProduto();
    //$produtoDao->incrementaProduto($produto);
    //header("Location:produto/increment-instance.php")
?>