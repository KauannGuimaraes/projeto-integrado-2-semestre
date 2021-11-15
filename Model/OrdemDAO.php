<?php
    require_once "Conexao.php";
    class OrdemDAO extends Conexao{
        function selecionaOrdem($Ordem){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("select * from Ordem where idOrdem = ?");
                $stmt= $pdo->prepare($sql);
                $stmt->bindValue(1, $Ordem->getIdOrdem());
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function atualizaOrdem($Ordem){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("update Ordem set Data = ?, Valor = ?, Pessoa_idPessoa = ? where idOrdem = ?");
                $stmt= $pdo->prepare($sql);
                $stmt->bindValue(1, $Ordem->getDataOrdem());
                $stmt->bindValue(2, $Ordem->getValorOrdem());
                $stmt->bindValue(3, $Ordem->getIdCliente());
                $stmt->bindValue(4, $Ordem->getIdOrdem());
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function selecionaOrdems(){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("select * from Ordem");
                $stmt= $pdo->prepare($sql);
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function insereOrdemEntrada($Ordem){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("insert into Ordem(Data, Tipo, Valor, Pessoa_idPessoa) values (?, ?, ?, ?)");
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $Ordem->getDataOrdem());
                $stmt->bindValue(2, "Entrada");
                $stmt->bindValue(3, NULL);
                $stmt->bindValue(4, $Ordem->getIdCliente());
                $stmt->execute();
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function insereOrdemSaida($Ordem){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("insert into Ordem(Data, Tipo, Valor, Pessoa_idPessoa) values (?, ?, ?, ?)");
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $Ordem->getDataOrdem());
                $stmt->bindValue(2, "Saida");
                $stmt->bindValue(3, $Ordem->getValorOrdem());
                $stmt->bindValue(4, $Ordem->getIdCliente());
                $stmt->execute();
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function deleteOrdem($Ordem){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("delete from Ordem WHERE idOrdem = ?");
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $Ordem->getIdOrdem());
                $stmt->execute();
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
    }