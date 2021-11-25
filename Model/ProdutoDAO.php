<?php
    require_once "Conexao.php";
    class ProdutoDAO extends Conexao{
        function selecionaProduto($produto){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("select * from Produto where idProduto = ?");
                $stmt= $pdo->prepare($sql);
                $stmt->bindValue(1, $produto);
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
                $sql = ("update Produto set DescricaoProduto = ?, QuantidadeProduto = ?, PrecoProduto = ? where idProduto = ?");
                $stmt= $pdo->prepare($sql);
                $stmt->bindValue(1, $produto->getDescricaoProduto());
                $stmt->bindValue(2, $produto->getQuantidadeProduto());
                $stmt->bindValue(3, $produto->getPrecoProduto());
                $stmt->bindValue(4, $produto->getIdProduto());
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
        function insereProduto($produto, $usuario){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("insert into Produto( DescricaoProduto, QuantidadeProduto, PrecoProduto, Empregado_idEmpregado) values (?, ?, ?, ?)");
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $produto->getDescricaoProduto());
                $stmt->bindValue(2, $produto->getQuantidadeProduto());
                $stmt->bindValue(3, $produto->getPrecoProduto());
                $stmt->bindValue(4, $usuario->getIdUsuario());
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