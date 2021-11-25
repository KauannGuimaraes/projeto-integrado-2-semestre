<?php
    require_once "../Model/ProdutoDAO.php";
    require_once "../Controller/Produto.php";
    require_once "../Controller/Usuario.php";
    $produto = new Produto();
    $usuario = new Usuario();
    $produtoDao = new ProdutoDAO();
    $produto->setQuantidadeProduto($_POST['quantidade']);
    $produto->setPrecoProduto($_POST['preco']);
    $produto->setDescricaoProduto($_POST['descricao']);
    $usuario->setIdUsuario($_POST['idusuario']);
    $produtoDao->insereProduto($produto, $usuario);
    header("Location:produto/add-produto.php")
?>