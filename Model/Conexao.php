<?php
abstract class Conexao{
        public static function getInstance(){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "id17766298_projetosige";
            try {
                $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            } catch(PDOException $e) {    
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }