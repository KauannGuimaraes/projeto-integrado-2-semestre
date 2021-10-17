<?php
    require_once "Conexao.php";
    class ProdutoDAO extends Conexao{
        function selecionaProduto($produto){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("select * from Produto where idProduto = ?");
                $stmt= $pdo->prepare($sql);
                $stmt->bindValue(1, $produto->getIdProduto());
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function atualizaProduto($produto){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("update Produto set NomeProduto = ?, DescricaoProduto = ?, QuantidadeProduto = ?, PrecoProduto = ? where idProduto = ?");
                $stmt= $pdo->prepare($sql);
                $stmt->bindValue(1, $produto->getNomeProduto());
                $stmt->bindValue(2, $produto->getDescricaoProduto());
                $stmt->bindValue(3, $produto->getQuantidadeProduto());
                $stmt->bindValue(4, $produto->getPrecoProduto());
                $stmt->bindValue(5, $produto->getIdProduto());
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function incrementaProduto($produto){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("update Produto set QuantidadeProduto = ? where idProduto = ?");
                $stmt= $pdo->prepare($sql);
                $stmt->bindValue(1, $produto->getQuantidadeProduto());
                $stmt->bindValue(2, $produto->getIdProduto());
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function decrementaProduto($produto){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("update Produto set QuantidadeProduto = ? where idProduto = ?");
                $stmt= $pdo->prepare($sql);
                $stmt->bindValue(1, $produto->getQuantidadeProduto());
                $stmt->bindValue(2, $produto->getIdProduto());
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function selecionaProdutos(){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("select * from Produto");
                $stmt= $pdo->prepare($sql);
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function insereProduto($produto){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("insert into Produto(NomeProduto, DescricaoProduto, QuantidadeProduto, PrecoProduto, Empregado_idEmpregado) values (?, ?, ?, ?, 1)");
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $produto->getNomeProduto());
                $stmt->bindValue(2, $produto->getDescricaoProduto());
                $stmt->bindValue(3, $produto->getQuantidadeProduto());
                $stmt->bindValue(4, $produto->getPrecoProduto());
                $stmt->execute();
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function deleteProduto($produto){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("delete from Produto WHERE idProduto = ?");
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $produto->getIdProduto());
                $stmt->execute();
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
    }