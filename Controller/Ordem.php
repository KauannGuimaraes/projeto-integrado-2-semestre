<?php
    private class Ordem {
        private $idOrdem;
        private $dataOrdem;
        private $valorOrdem;
        private $idCliente;

        public function getIdOrdem(){
            return $this->idOrdem;
        }
        public function setIdOrdem($m){
            $this->idOrdem = $m;
        }

        public function getDataOrdem(){
            return $this->dataOrdem;
        }
        public function setDataOrdem($m) {
            $this->dataOrdem = $m;
        }

        public function getValorOrdem(){
            return $this->valorOrdem;
        }
        public function setValorOrdem($m) {
            $this->valorOrdem = $m;
        }

        public function getIdCliente(){
            return $this->idCliente;
        }
        public function setIdCliente($m) {
            $this->idCliente = $m;
        }
    }