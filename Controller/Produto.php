<?php 
    public class Produto {
        private $idProduto ;
        private $nomeProduto;
        private $descricaoProduto;
        private $quantidadeProduto;
        
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
    }
?>