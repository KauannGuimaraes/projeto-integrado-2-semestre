<?php require "../../Model/EmpregadoDAO.php" ?>
<?php require "../../Controller/Usuario.php" ?>
<?php
session_start();
$empDao = new EmpregadoDAO();
$usuario = new Usuario();
$usuario->setEmailUsuario($_POST['email']);
$usuario->setSenhaUsuario($_POST['password']);
$result = $empDao->selecionaAuthEmpregado($usuario);
if ($result == null){
    echo "false";
    header("Location:index.php");
} else {
    $_SESSION['logged'] = true;
    $_SESSION['username'] = $result['NomeEmpregado'];
    $_SESSION['idUser'] = $result['idEmpregado'];
    header("Location:../estoque.php");
}
?>