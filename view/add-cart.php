<?php 
require_once "../Model/ProdutoDAO.php";
// require_once "../Model/OrdemDAO.php";
// require_once "../Controller/Produto.php";
// require_once "../Controller/Ordem.php";
$produtoDao = new ProdutoDAO();
session_start();
///$_SESSION["cart_itemD"] = array();
//$opcao = $_POST['addcart'];
switch($_REQUEST['cart']){
case "addD":
	if(isset($_POST["QuantidadeProduto"])) {
		$productByCode = $produtoDao->selecionaProduto($_POST["idProduto"]);
		$itemArray = array($productByCode[0]["idProduto"]=>array('nome'=>$productByCode[0]["DescricaoProduto"], 'idProduto'=>$productByCode[0]["idProduto"], 'QuantidadeProduto'=>$_POST["QuantidadeProduto"], 'PrecoProduto'=>$productByCode[0]["PrecoProduto"]));
		
		if(isset($_SESSION["cart_itemD"])) {
			if(in_array($productByCode[0]["idProduto"],array_keys($_SESSION["cart_itemD"]))) {
				foreach($_SESSION["cart_itemD"] as $k => $v) {
						if($productByCode[0]["idProduto"] == $k) {
							if(empty($_SESSION["cart_itemD"][$k]["QuantidadeProduto"])) {
								$_SESSION["cart_itemD"][$k]["QuantidadeProduto"] = 0;
							}
							$_SESSION["cart_itemD"][$k]["QuantidadeProduto"] += $_POST["QuantidadeProduto"];
						}
				}
			} else {
				$_SESSION["cart_itemD"] = array_merge($_SESSION["cart_itemD"],$itemArray);
			}
		} else {
			$_SESSION["cart_itemD"] = $itemArray;
		}
		header("Location:produto/decrement-produto.php");
	}
	break;
	case "addI":
		if(isset($_POST["QuantidadeProduto"])) {
			$productByCode = $produtoDao->selecionaProduto($_POST["idProduto"]);
			$itemArray = array($productByCode[0]["idProduto"]=>array('nome'=>$productByCode[0]["DescricaoProduto"], 'idProduto'=>$productByCode[0]["idProduto"], 'QuantidadeProduto'=>$_POST["QuantidadeProduto"], 'PrecoProduto'=>$productByCode[0]["PrecoProduto"]));
			
			if(isset($_SESSION["cart_itemI"])) {
				if(in_array($productByCode[0]["idProduto"],array_keys($_SESSION["cart_itemI"]))) {
					foreach($_SESSION["cart_itemI"] as $k => $v) {
							if($productByCode[0]["idProduto"] == $k) {
								if(empty($_SESSION["cart_itemI"][$k]["QuantidadeProduto"])) {
									$_SESSION["cart_itemI"][$k]["QuantidadeProduto"] = 0;
								}
								$_SESSION["cart_itemI"][$k]["QuantidadeProduto"] += $_POST["QuantidadeProduto"];
							}
					}
				} else {
					$_SESSION["cart_itemI"] = array_merge($_SESSION["cart_itemI"],$itemArray);
				}
			} else {
				$_SESSION["cart_itemI"] = $itemArray;
			}
			header("Location:produto/increment-produto.php");
		}
		break;
case "cleanI":
	unset($_SESSION['cart_itemI']);
	header("Location:produto/increment-produto.php");
	break;
case "cleanD":
	unset($_SESSION['cart_itemD']);
	header("Location:produto/decrement-produto.php");
	break;
}

?>