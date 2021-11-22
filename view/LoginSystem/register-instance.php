<?php require "../../Model/EmpregadoDAO.php" ?>
<?php require "../../Controller/Usuario.php" ?>
<?php
session_start();
$empDao = new EmpregadoDAO();
$usuario = new Usuario();
$usuario->setNomeUsuario($_POST['username']);
$usuario->setSenhaUsuario($_POST['password']);
$usuario->setEmailUsuario($_POST['email']);
$comfirmarSenha = $_POST['cpassword'];
$result = $empDao->selecionaAuthEmpregado($usuario);
if ($result == null && $comfirmarSenha == $usuario->getSenhaUsuario()){
    $empDao->insereEmpregado($usuario);
    header("Location:index.php");
} else {
    echo "false";
    header("Location:index.php");
}
?>