<?php
    require_once "Conexao.php";
    class DashBoardDAO extends Conexao{
        function ConsultarValor(){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("select sum(Valor) from Ordem;");
                $stmt= $pdo->prepare($sql);
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }

        function OrdenarMaiorPreço(){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("select NomePessoa, Valor from Ordem inner 
                join Pessoa on Pessoa_idPessoa = idPessoa order by Valor desc;
                ");
                $stmt= $pdo->prepare($sql);
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }

        function OrdenarSaidaRecorente(){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("SELECT DescricaoProduto FROM Ordem_has_Produto inner join Produto 
                on idProduto = Produto_idProduto GROUP BY Produto_idProduto ORDER BY SUM(Quantidade) DESC;                
                ");
                $stmt= $pdo->prepare($sql);
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        