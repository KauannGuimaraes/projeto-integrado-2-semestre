<?php
    require_once "../Model/ProdutoDAO.php";
    require_once "../Controller/Produto.php";
    $produto = new Produto();
    $produtoDao = new ProdutoDAO();
    $decremento = $_POST['quantidade'];
    $produto->setIdProduto($_POST['idProduto']);
    $result = $produtoDao->selecionaProduto($produto);
    foreach($result as $result){
        $idProduto = $result['idProduto'];
        $quantidadeProduto = $result['QuantidadeProduto'];
    }
    $produto->setQuantidadeProduto($quantidadeProduto);
    $quantidade = $produto->getQuantidadeProduto() - $decremento;
    $produto->setQuantidadeProduto($quantidade);
    $produtoDao->decrementaProduto($produto);
    header("Location:produto/decrement-produto.php")
?>