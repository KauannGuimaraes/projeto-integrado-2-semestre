<?php 
    class Produto {
        private $idProduto ;
        private $nomeProduto;
        private $descricaoProduto;
        private $quantidadeProduto;
        private $precoProduto;
        
        public function getPrecoProduto(){
            return $this->precoProduto;
        }
        public function setPrecoProduto($m){
            $this->precoProduto = $m;
        }

        public function getIdProduto(){
            return $this->idProduto;
        }
        public function setIdProduto($m){
            $this->idProduto = $m;
        }

        public function getNomeProduto(){
            return $this->nomeProduto;
        }
        public function setNomeProduto($m) {
            $this->nomeProduto = $m;
        }

        public function getDescricaoProduto(){
            return $this->descricaoProduto;
        }
        public function setDescricaoProduto($m) {
            $this->descricaoProduto = $m;
        }

        public function getQuantidadeProduto(){
            return $this->quantidadeProduto;
        }
        public function setQuantidadeProduto($m){
            $this->quantidadeProduto = $m;
        }
        public function incrementa($m){
            $this->quantidadeProduto = $quantidadeProduto + $m;
        }
        public function decrementa($m){
            $this->quantidadeProduto = $quantidadeProduto - $m;
        }
    }
?>