<?php
    require_once "Conexao.php";
    class EmpregadoDAO extends Conexao{
        function selecionaEmpregado($Empregado){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("select * from Empregado where idEmpregado = ?");
                $stmt= $pdo->prepare($sql);
                $stmt->bindValue(1, $Empregado->getIdEmpregado());
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function selecionaAuthEmpregado($Empregado){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("select * from Empregado where EmailEmpregado = ? and SenhaEmpregado = ?");
                $stmt= $pdo->prepare($sql);
                $stmt->bindValue(1, $Empregado->getEmailUsuario());
                $stmt->bindValue(2, $Empregado->getSenhaUsuario());
                $stmt-> execute();
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function atualizaEmpregado($Empregado){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("update Empregado set NomeEmpregado = ?, EmailEmpregado = ?, PrivilegiosEmpregado = ?, TipoEmpregado = ? where idEmpregado = ?");
                $stmt= $pdo->prepare($sql);
                $stmt->bindValue(1, $Empregado->getNomeEmpregado());
                $stmt->bindValue(2, $Empregado->getEmailEmpregado());
                $stmt->bindValue(3, $Empregado->getPrivilegiosEmpregado());
                $stmt->bindValue(4, $Empregado->getTipoEmpregado());
                $stmt->bindValue(5, $Empregado->getIdEmpregado());
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function selecionaEmpregados(){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("select * from Empregado");
                $stmt= $pdo->prepare($sql);
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function insereEmpregado($Empregado){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("insert into Empregado(NomeEmpregado, EmailEmpregado, SenhaEmpregado) values (?, ?, ?)");
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $Empregado->getNomeUsuario());
                $stmt->bindValue(2, $Empregado->getEmailUsuario());
                $stmt->bindValue(3, $Empregado->getSenhaUsuario());
                $stmt->execute();
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function deleteEmpregado($Empregado){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("delete from Empregado WHERE idEmpregado = ?");
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $Empregado->getIdEmpregado());
                $stmt->execute();
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
    }