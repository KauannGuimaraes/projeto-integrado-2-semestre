<?php
    private class OrdemCompra {
        private $idOrdemCompra;
        private $dataOrdemCompra;
        private $statusOrdemCompra;
        private $dataEnvioOrdemCompra;
        private $idCliente;

        public function getIdOrdemCompra(){
            return $this->idOrdemCompra;
        }
        public function setIdOrdemCompra($m){
            $this->idOrdemCompra = $m;
        }

        public function getDataOrdemCompra(){
            return $this->dataOrdemCompra;
        }
        public function setDataOrdemCompra($m) {
            $this->dataOrdemCompra = $m;
        }

        public function getStatusOrdemCompra(){
            return $this->statusOrdemCompra;
        }
        public function setStatusOrdemCompra($m) {
            $this->statusOrdemCompra = $m;
        }

        public function getDataEnvioOrdemCompra(){
            return $this->dataEnvioOrdemCompra;
        }
        public function setDataEnvioOrdemCompra($m){
            $this->dataEnvioOrdemCompra = $m;
        }

        public function getIdCliente(){
            return $this->idCliente;
        }
        public function setIdCliente($m) {
            $this->idCliente = $m;
        }
    }