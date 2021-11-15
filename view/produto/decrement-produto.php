<?php require_once "../acess/index.php"; ?>
<?php
    //ssession_start();    
    require "../../Controller/Usuario.php";
    require "../../Model/ClienteDAO.php"; 
    require "../../Model/ProdutoDAO.php"; 
    $login = new Usuario();
    $login->checkLogin();
    $produtoDao = new ProdutoDAO();
?>
<html>
    <head>
        <link href="../bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="card" >
                <div class="card-header">
                    <div class="alert alert-warning" role="alert">
                        <center> Setor para Descrementar Produtos </center>
                    </div>
                </div>
            </div>    
            <center>
            <br><br><br>
            
            
            <div class="row justify-content-md-center" data-masonry='{"percentPosition": true }'>
        <div class="col-2 m-3">
            <div class="card" style="width: 20rem;">
                <form  action="../add-cart.php" method="POST">
                    <br>

                <label for="exampleInputPassword1" class="form-label">Produto:</label>
                        <select id="produto" name="idProduto">
                        <?php
                        $result = $produtoDao->selecionaProdutos();
                        foreach($result as $result) {
                            echo "<option value=".$result['idProduto'].">".$result['DescricaoProduto']."</option>";
                        } ?>
                    </select>
                    <br>
                        <label for="exampleInputPassword1" class="form-label">Quantidade:</label>
                        <input type="number" class="form-control" name="QuantidadeProduto">
                        <br>
                        
                    <button type="submit" name="cart" value="add" class="btn btn-warning">adicionar a ordem</button>
                    <button type="submit" name="cart" value="clean" class="btn btn-warning">limpar ordem</button>
                </form>
            </div>
        </div>
        <div class="col-2 m-3">
        <div class="card" style="width: 20rem;">
            <form class="" action="../decrement-product-instance.php" method="POST">
            <?php 
            if(isset($_SESSION['cart_item'])) {
            foreach ($_SESSION["cart_item"] as $item){
            $itemid=$item["idProduto"];
            $itemnome=$item["nome"];
            $itempreco=$item["PrecoProduto"];
            $itemquantidade=$item["QuantidadeProduto"];
            $itemprecototal = $itempreco*$itemquantidade;
            echo $itemid." | ";
            echo $itemnome." | ";
            echo "R$".$itemprecototal." | ";
            echo $itemquantidade." Uni | <br>";
            $itemArray = serialize($_SESSION['cart_item']);
            echo "<input type='hidden' name='itemArray' value=".$itemArray.">";
            } }?>
            
            <label for="exampleInputPassword1" class="form-label">Cliente:</label>
                        <select id="cliente" name="cliente">
                        <?php $clieDao = new ClienteDAO();
                        $result = $clieDao->selecionaClientes();
                        foreach($result as $result) {
                            echo "<option value=".$result['idPessoa'].">".$result['NomePessoa']."</option>";
                        } ?>
                    </select>

                <button type="submit" class="btn btn-warning">Decrementar do estoque</button>
            </form>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
    <div class="col-2 m-3">
        <div class="card" style="width: 20rem;">
            <form class="" action="../add-cliente-instance.php" method="POST">
                    <label for="producttype" class="form-label">Nome do cliente:</label>
                    <input type="text" class="form-control" name="nome">

                    <label for="exampleInputPassword1" class="form-label">Endereco do cliente:</label>
                    <input type="text" class="form-control" name="endereco">

                <button type="submit" class="btn btn-warning">cadastrar cliente</button>
            </form>
            </div>
        </div>
    </div>
    </center> 
    </body>
</html>