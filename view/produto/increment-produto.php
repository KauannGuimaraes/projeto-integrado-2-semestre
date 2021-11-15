<?php require_once "../acess/index.php"; ?>
<?php
    session_start();    
    require "../../Controller/Usuario.php";
    require "../../Model/ClienteDAO.php"; 
    $login = new Usuario();
    $login->checkLogin();
?>
<html>

    <head>
        <link href="../bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="card" >
                <div class="card-header">
                    <div class="alert alert-warning" role="alert">
                        <center> Setor para Incrementar Produtos </center>
                    </div>
                </div>
            </div>    
            <center>
            <br><br><br>
            <div class="card" style="width: 20rem;">
            <form class="container-sm" action="../increment-product-instance.php" method="POST">
                <div class="mb-3">
                    <label for="producttype" class="form-label">id do produto</label>
                    <input type="text" class="form-control" name="idProduto">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Quantidade</label>
                    <input type="number" class="form-control" name="quantidade">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Cliente:</label>
                    <select id="fornecedor" name="fornecedor">
                        <?php $clieDao = new ClienteDAO();
                        $result = $clieDao->selecionaFornecedores();
                        foreach($result as $result) {
                            echo "<option value=".$result['idPessoa'].">".$result['NomePessoa']."</option>";
                        } ?>
                    </select>
                </div>
                
                <button type="submit" class="btn btn-warning">Incrementar</button>
            </form>
            </div>
            
            </center>
            <center>
            <br><br><br>
            <div class="card" style="width: 20rem;">
            <form class="container-sm" action="../add-fornecedor-instance.php" method="POST">
                <div class="mb-3">
                    <label for="producttype" class="form-label">Nome do fornecedor:</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Endereco do fornecedor:</label>
                    <input type="text" class="form-control" name="endereco">
                </div>
                <button type="submit" class="btn btn-warning">cadastrar fornecedor</button>
            </form>
            </div>
            </center>  
    </body>
</html>