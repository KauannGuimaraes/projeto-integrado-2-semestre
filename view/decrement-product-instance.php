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
    $quantidadeSelecionado = $_POST['quantidade'];
    $produto->setIdProduto($_POST['idProduto']);
    $ordem->setIdCliente($_POST['cliente']); // atribui cliente
    $result = $produtoDao->selecionaProduto($produto);
    foreach($result as $result){
        $idProduto = $result['idProduto'];
        $precoProduto = $result['PrecoProduto'];
        $quantidadeProduto = $result['QuantidadeProduto'];
    }
    $valor = $quantidadeSelecionado * $precoProduto;
    $ordem->setValorOrdem($valor); // atribui preco
    $ordemDao->insereOrdemSaida($ordem);
    $quantidadeProduto = $quantidadeProduto - $quantidadeSelecionado;
    $produto->setQuantidadeProduto($quantidadeProduto);
    $produtoDao->decrementaProduto($produto);
    header("Location:produto/decrement-produto.php")
?>