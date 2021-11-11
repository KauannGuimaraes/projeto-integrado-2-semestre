<?php
    require_once "Conexao.php";
    class ClienteDAO extends Conexao{
        function selecionaCliente($Cliente){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("select * from Pessoa where idCliente = ?");
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
                $sql = ("update Pessoa set NomeCliente = ?, EnderecoCliente = ? where idCliente = ?");
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
                $sql = ("select * from Pessoa");
                $stmt= $pdo->prepare($sql);
                $stmt-> execute();
                $result = $stmt->fetchAll();
                return $result;
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
//        function insereCliente($Cliente){
 //           try {
 //               $pdo = Conexao::getInstance();
 //               $sql = ("insert into Cliente(NomeCliente, EnderecoCliente) values (?, ?)");
 //               $stmt = $pdo->prepare($sql);
 //               $stmt->bindValue(1, $Cliente->getNomeCliente());
 //               $stmt->bindValue(2, $Cliente->getEnderecoCliente());
 //               $stmt->execute();
 //           } catch (PDOException $ex) {
 //               echo $ex;
 //           }
 //       }
        function deleteCliente($Cliente){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("delete from Pessoa WHERE idCliente = ?");
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $Cliente->getIdCliente());
                $stmt->execute();
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
        function insereFuncionario($Fornecedor){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("insert into Pessoa(NomePessoa, TipoPessoa) values (?,'Fornecedor')");
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $Fornecedor->getNomePessoa());
                $stmt->execute();
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
            function insereCliente($Pessoa){
                try {
                    $pdo = Conexao::getInstance();
                    $sql = ("insert into Pessoa(NomePessoa, TipoPessoa) values (?,'Cliente' )");
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindValue(1, $Pessoa->getNomePessoa());
                    $stmt->execute();
                } catch (PDOException $ex) {
                    echo $ex;
                }
            
    }
}
