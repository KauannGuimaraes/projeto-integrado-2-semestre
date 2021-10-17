<?php
    require_once "Conexao.php";
    class ClienteDAO extends Conexao{
        function selecionaCliente($Cliente){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("select * from Cliente where idCliente = ?");
                $stmt= $pdo->prepare($sql);
                $stmt->bindValue(1, $Cliente->getIdCliente());
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function atualizaCliente($Cliente){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("update Cliente set NomeCliente = ?, EnderecoCliente = ? where idCliente = ?");
                $stmt= $pdo->prepare($sql);
                $stmt->bindValue(1, $Cliente->getNomeCliente());
                $stmt->bindValue(2, $Cliente->getEnderecoCliente());
                $stmt->bindValue(3, $Cliente->getIdCliente());
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function selecionaClientes(){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("select * from Cliente");
                $stmt= $pdo->prepare($sql);
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function insereCliente($Cliente){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("insert into Cliente(NomeCliente, EnderecoCliente) values (?, ?)");
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $Cliente->getNomeCliente());
                $stmt->bindValue(2, $Cliente->getEnderecoCliente());
                $stmt->execute();
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function deleteCliente($Cliente){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("delete from Cliente WHERE idCliente = ?");
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $Cliente->getIdCliente());
                $stmt->execute();
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
    }