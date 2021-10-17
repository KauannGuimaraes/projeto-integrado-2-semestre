<?php
    public class Cliente{
        private $idCliente;
        private $nomeCliente;
        private $enderecoCliente;

        public function getIdCliente(){
            return $this->idCliente;
        }
        public function setIdCliente($m){
            $this->idCliente = $m;
        }

        public function getNomeCliente(){
            return $this->nomeCliente;
        }
        public function setNomeCliente($m) {
            $this->nomeCliente = $m;
        }

        public function getEnderecoCliente(){
            return $this->enderecoCliente;
        }
        public function setEnderecoCliente($m) {
            $this->enderecoCliente = $m;
        }
    }