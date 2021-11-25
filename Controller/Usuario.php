<?php
    class Usuario{
        private $idUsuario;
        private $nomeUsuario;
        private $senhaUsuario;
        private $emailUsuario;

        public function getIdUsuario(){
            return $this->idUsuario;
        }
        public function setIdUsuario($m){
            $this->idUsuario = $m;
        }

        public function getNomeUsuario(){
            return $this->nomeUsuario;
        }
        public function setNomeUsuario($m) {
            $this->nomeUsuario = $m;
        }

        public function getSenhaUsuario(){
            return $this->senhaUsuario;
        }
        public function setSenhaUsuario($m){
            $this->senhaUsuario = $m;
        }

        public function getEmailUsuario(){
            return $this->emailUsuario;
        }
        public function setEmailUsuario($m) {
            $this->emailUsuario = $m;
        }
        public function checkLogin() {
            if (isset($_SESSION['logged'])){
                //header("Location:view/estoque.php");
            } else {
                header("Location:LoginSystem/index.php");
            }
        }
    }
?>