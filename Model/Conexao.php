<?php
abstract class Conexao{
        public static function getInstance(){
            $servername = "localhost";
            $username = "id17766298_root";
            $password = "B31mont$3n@091326";
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