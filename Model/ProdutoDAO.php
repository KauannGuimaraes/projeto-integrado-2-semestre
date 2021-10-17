<?php
    public class ProdutoDAO extends Conexao{
        function selecionaProduto($produto){
            try {
                $pdo = Conection::getInstance();
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
                $pdo = Conection::getInstance();
                $sql = ("update Produto set NomeProduto = ?, DescricaoProduto = ?, QuantidadeProduto = ?, PrecoProduto = ? where idProduto = ?");
                $stmt= $pdo->prepare($sql);
                $stmt->bindValue(1, $produto->getNomeProduto());
                $stmt->bindValue(1, $produto->getDescricaoProduto());
                $stmt->bindValue(1, $produto->getQuantidadeProduto());
                $stmt->bindValue(1, $produto->getPrecoProduto());
                $stmt->bindValue(1, $produto->getIdProduto());
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function selecionaProdutos(){
            try {
                $pdo = Conection::getInstance();
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
                $pdo = Conection::getInstance();
                $sql = ("insert into Produto(NomeProduto, DescricaoProduto, QuantidadeProduto, PrecoProduto) values (?, ?, ?, ?)");
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
                $pdo = Conection::getInstance();
                $sql = ("delete from Produto WHERE idProduto = ?");
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $produto->getIdProduto());
                $stmt->execute();
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
    }