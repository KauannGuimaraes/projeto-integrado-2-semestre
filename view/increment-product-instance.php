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
  $ordem->setIdCliente($_POST['fornecedor']); // atribui cliente
  $ordemid = $ordemDao->insereOrdemEntrada($ordem); // cria ordem
  $array = $_POST['itemArray'];
  $arrayitem = unserialize($array);
  foreach($arrayitem as $arrayitem){
    $itemid = $arrayitem['idProduto'];
    $itemnome = $arrayitem['nome'];
    $itemquantidade = $arrayitem['QuantidadeProduto'];
    $result = $produtoDao->selecionaProduto($itemid);
    foreach($result as $result){
      $quantidadeProduto = $result['QuantidadeProduto'];
      $quantidadeProduto = $quantidadeProduto + $itemquantidade;
      $produto->setQuantidadeProduto($quantidadeProduto);
      $produto->setIdProduto($itemid);
      $produtoDao->incrementaProduto($produto);
    }
    $ordemDao->inserirOrdemProduto($ordemid,$itemid,$itemquantidade,$precoProduto);
  }
  header("Location:produto/increment-produto.php")
?>