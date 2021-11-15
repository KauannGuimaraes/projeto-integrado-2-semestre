<?php
    require_once "../Model/ProdutoDAO.php";
    require_once "../Model/OrdemDAO.php";
    require_once "../Controller/Produto.php";
    require_once "../Controller/Ordem.php";
    $produto = new Produto();
    $produtoDao = new ProdutoDAO();
    $ordemDao = new OrdemDAO();
    $ordem = new Ordem();
    $data = date("Y-m-d"); 
    $ordem->setDataOrdem($data); // atribui data
    $incremento = $_POST['quantidade'];
    $produto->setIdProduto($_POST['idProduto']);
    $ordem->setIdCliente($_POST['fornecedor']); // atribui cliente
    $result = $produtoDao->selecionaProduto($produto);
    foreach($result as $result){
        $idProduto = $result['idProduto'];
        $quantidadeProduto = $result['QuantidadeProduto'];
    }
    $ordemDao->insereOrdemEntrada($ordem);
    $produto->setQuantidadeProduto($quantidadeProduto);
    $quantidade = $produto->getQuantidadeProduto() + $incremento;
    $produto->setQuantidadeProduto($quantidade);
    $produtoDao->incrementaProduto($produto);
    header("Location:produto/increment-produto.php")
?>