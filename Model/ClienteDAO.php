<?php
    require_once "Conexao.php";
    class ClienteDAO extends Conexao{
        function selecionaCliente($Cliente){
            try {
                $pdo = Conexao::getInstance();
                $sql = ("select * from pessoa where idCliente = ?");
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
                $sql = ("update pessoa set NomeCliente = ?, EnderecoCliente = ? where idCliente = ?");
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
                $sql = ("select * from pessoa");
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
                $sql = ("delete from pessoa WHERE idCliente = ?");
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
                $sql = ("insert into pessoa(NomePessoa, TipoPessoa) values (?,'Fornecedor')");
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(1, $Fornecedor->getNomeFornecedor());
                $stmt->bindValue(2, $Fornecedor->getTipoFornecedor());
                $stmt->execute();
            } catch (PDOException $ex) {
                echo $ex;
            }
        }
            function insereCliente($Pessoa){
                try {
                    $pdo = Conexao::getInstance();
                    $sql = ("insert into pessoa(NomePessoa, TipoPessoa) values (?,'Cliente' )");
                    $stmt = $pdo->prepare($sql);
                    $stmt->bindValue(1, $Cliente->getNomeCliente());
                    $stmt->bindValue(2, $Cliente->getTipoCliente());
                    $stmt->execute();
                } catch (PDOException $ex) {
                    echo $ex;
                }
            
    }
}
