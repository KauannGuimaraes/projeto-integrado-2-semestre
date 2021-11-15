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
  $ordem->setIdCliente($_POST['cliente']); // atribui cliente
  $ordemid = $ordemDao->insereOrdemSaida($ordem); // cria ordem
  $array = $_POST['itemArray'];
  $precototal;
  $arrayitem = unserialize($array);
  foreach($arrayitem as $arrayitem){
    $itemid = $arrayitem['idProduto'];
    $itemnome = $arrayitem['nome'];
    $itemquantidade = $arrayitem['QuantidadeProduto'];
    $result = $produtoDao->selecionaProduto($itemid);
    foreach($result as $result){
      $precoProduto = $result['PrecoProduto'];
      $quantidadeProduto = $result['QuantidadeProduto'];
      $precototal = $precototal + ($itemquantidade * $precoProduto); //preco total
      $quantidadeProduto = $quantidadeProduto - $itemquantidade;
      $produto->setQuantidadeProduto($quantidadeProduto);
      $produto->setIdProduto($itemid);
      $produtoDao->decrementaProduto($produto);
    }
    $ordemDao->inserirOrdemProduto($ordemid,$itemid,$itemquantidade,$precoProduto);
  }
  $ordem->setIdOrdem($ordemid);
  $ordem->setValorOrdem($precototal); // atribui preco
  $ordemDao->atualizaOrdem($ordem);
  header("Location:produto/decrement-produto.php");
?>