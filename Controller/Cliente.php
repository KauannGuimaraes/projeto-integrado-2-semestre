<?php
    class Pessoa{
        private $idPessoa;
        private $nomePessoa;
        private $enderecoPessoa;

        public function getIdPessoa(){
            return $this->idPessoa;
        }
        public function setIdPessoa($m){
            $this->idPessoa = $m;
        }

        public function getNomePessoa(){
            return $this->nomePessoa;
        }
        public function setNomePessoa($m) {
            $this->nomePessoa = $m;
        }

        public function getEnderecoPessoa(){
            return $this->enderecoPessoa;
        }
        public function setEnderecoPessoa($m) {
            $this->enderecoPessoa = $m;
        }
    }