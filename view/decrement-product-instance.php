<?php
    require_once "../Model/OrdemCompraDAO.php";
    require_once "../Controller/Produto.php";
    $produto = new Produto();
    $OrdemCompraDAO = new OrdemCompraDAO();
    $decremento = $_POST['quantidade'];
    $produto->setIdProduto($_POST['idProduto']);
    $result = $OrdemCompraDAO->selecionaProduto($produto);
    foreach($result as $result){
        $idProduto = $result['idProduto'];
        $quantidadeProduto = $result['QuantidadeProduto'];
    }
    $produto->setQuantidadeProduto($quantidadeProduto);
    $quantidade = $produto->getQuantidadeProduto() - $decremento;
    $produto->setQuantidadeProduto($quantidade);
    $OrdemCompraDAO->insereOrdemCompra($produto);
    header("Location:produto/decrement-produto.php")
?>