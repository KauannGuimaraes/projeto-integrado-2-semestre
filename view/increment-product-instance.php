<?php
    require_once "../Model/ProdutoDAO.php";
    require_once "../Controller/Produto.php";
    $produto = new Produto();
    $produtoDao = new ProdutoDAO();
    $incremento = $_POST['quantidade'];
    $produto->setIdProduto($_POST['idProduto']);
    $result = $produtoDao->selecionaProduto($produto);
    foreach($result as $result){
        $idProduto = $result['idProduto'];
        $quantidadeProduto = $result['QuantidadeProduto'];
    }
    $produto->setQuantidadeProduto($quantidadeProduto);
    $quantidade = $produto->getQuantidadeProduto() + $incremento;
    $produto->setQuantidadeProduto($quantidade);
    $produtoDao->incrementaProduto($produto);
    header("Location:produto/increment-produto.php")
?>