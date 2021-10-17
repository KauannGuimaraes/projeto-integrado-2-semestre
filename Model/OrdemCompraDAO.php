<?php
    require_once "Conexao.php";
    class OrdemCompraDAO extends Conexao{
        function selecionaOrdemCompra($OrdemCompra){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("select * from OrdemCompra where idOrdemCompra = ?");
                $stmt= $pdo->prepare($sql);
                $stmt->bindValue(1, $OrdemCompra->getIdOrdemCompra());
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function atualizaOrdemCompra($OrdemCompra){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("update OrdemCompra set DataOrdemCompra = ?, StatusOrdemCompra = ?, DataEnvioOrdemCompra = ?, Cliente_idCliente = ? where idOrdemCompra = ?");
                $stmt= $pdo->prepare($sql);
                $stmt->bindValue(1, $OrdemCompra->getDataOrdemCompra());
                $stmt->bindValue(2, $OrdemCompra->getStatusOrdemCompra());
                $stmt->bindValue(3, $OrdemCompra->getDataEnvioOrdemCompra());
                $stmt->bindValue(4, $OrdemCompra->getIdCliente());
                $stmt->bindValue(5, $OrdemCompra->getIdOrdemCompra());
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function selecionaOrdemCompras(){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("select * from OrdemCompra");
                $stmt= $pdo->prepare($sql);
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function insereOrdemCompra($OrdemCompra){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("insert into OrdemCompra(DataOrdemCompra, StatusOrdemCompra, DataEnvioOrdemCompra, Cliente_idCliente) values (?, ?, ?, ?)");
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $OrdemCompra->getDataOrdemCompra());
                $stmt->bindValue(2, $OrdemCompra->getStatusOrdemCompra());
                $stmt->bindValue(3, $OrdemCompra->getDataEnvioOrdemCompra());
                $stmt->bindValue(4, $OrdemCompra->getIdCompra());
                $stmt->execute();
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function deleteOrdemCompra($OrdemCompra){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("delete from OrdemCompra WHERE idOrdemCompra = ?");
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $OrdemCompra->getIdOrdemCompra());
                $stmt->execute();
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
    }