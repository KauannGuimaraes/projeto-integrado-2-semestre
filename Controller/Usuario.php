<?php
    class Usuario{
        private $idUsuario;
        private $nomeUsuario;
        private $senhaUsuario;
        private $emailUsuario;
        private $privilegioUsuario;
        private $tipoUsuario;

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

        public function getPrivilegioUsuario(){
            return $this->privilegioUsuario;
        }
        public function setPrivilegioUsuario($m){
            $this->privilegioUsuario = $m;
        }

        public function getTipoUsuario(){
            return $this->tipoUsuario;
        }
        public function setTipoUsuario($m) {
            $this->tipoUsuario = $m;
        }
        public function checkLogin() {
            if (isset($_SESSION['logged'])){
                //header("Location:../../../../projecao/projeto-integrado-2-semestre/view/produto/add-produto.php");
            } else {
                header("Location:../../../../projecao/projeto-integrado-2-semestre/LoginSystem/index.php");
            }
        }
    }
?>