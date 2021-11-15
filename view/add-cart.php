<?php 
require_once "../Model/ProdutoDAO.php";
// require_once "../Model/OrdemDAO.php";
// require_once "../Controller/Produto.php";
// require_once "../Controller/Ordem.php";
$produtoDao = new ProdutoDAO();
session_start();
///$_SESSION["cart_item"] = array();
//$opcao = $_POST['addcart'];
switch($_REQUEST['cart']){
case "add":
	if(isset($_POST["QuantidadeProduto"])) {
		$productByCode = $produtoDao->selecionaProduto($_POST["idProduto"]);
		$itemArray = array($productByCode[0]["idProduto"]=>array('nome'=>$productByCode[0]["DescricaoProduto"], 'idProduto'=>$productByCode[0]["idProduto"], 'QuantidadeProduto'=>$_POST["QuantidadeProduto"], 'PrecoProduto'=>$productByCode[0]["PrecoProduto"]));
		
		if(isset($_SESSION["cart_item"])) {
			if(in_array($productByCode[0]["idProduto"],array_keys($_SESSION["cart_item"]))) {
				foreach($_SESSION["cart_item"] as $k => $v) {
						if($productByCode[0]["idProduto"] == $k) {
							if(empty($_SESSION["cart_item"][$k]["QuantidadeProduto"])) {
								$_SESSION["cart_item"][$k]["QuantidadeProduto"] = 0;
							}
							$_SESSION["cart_item"][$k]["QuantidadeProduto"] += $_POST["QuantidadeProduto"];
						}
				}
			} else {
				$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
			}
		} else {
			$_SESSION["cart_item"] = $itemArray;
		}
	}
	break;

case "clean":
    unset($_SESSION['cart_item']);
}
header("Location:produto/decrement-produto.php");
?>