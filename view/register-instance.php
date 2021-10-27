<?php
    require_once "../Model/EmpregadoDAO.php";
    require_once "../Controller/Usuario.php";
    $produto = new Usuario();
    $produtoDao = new EmpregadoDAO();
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $privilegio = $_POST['privilegio'];
    $tipo = $_POST['tipo'];
    $produto->setNomeUsuario();
    $produto->setEmailUsuario();
    $produto->setPrivilegioUsuario();
    $produto->setTipoUsuario();
    header("Location:produto/estoque.php")
?>