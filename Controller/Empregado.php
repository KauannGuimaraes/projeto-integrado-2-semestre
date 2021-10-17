<?php
    public class Empregado{
        private $idEmpregado;
        private $nomeEmpregado;
        private $emailEmpregado;
        private $privilegioEmpregado;
        private $tipoEmpregado;

        public function getIdEmpregado(){
            return $this->idEmpregado;
        }
        public function setIdEmpregado($m){
            $this->idEmpregado = $m;
        }

        public function getNomeEmpregado(){
            return $this->nomeEmpregado;
        }
        public function setNomeEmpregado($m) {
            $this->nomeEmpregado = $m;
        }

        public function getEmailEmpregado(){
            return $this->emailEmpregado;
        }
        public function setEmailEmpregado($m) {
            $this->emailEmpregado = $m;
        }

        public function getPrivilegioEmpregado(){
            return $this->privilegioEmpregado;
        }
        public function setPrivilegioEmpregado($m){
            $this->privilegioEmpregado = $m;
        }

        public function getTipoEmpregado(){
            return $this->tipoEmpregado;
        }
        public function setTipoEmpregado($m) {
            $this->tipoEmpregado = $m;
        }
    }