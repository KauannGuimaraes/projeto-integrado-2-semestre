
<?php require_once "../acess/index.php"; ?>
<?php
    //session_start();    
    require "../../Controller/Usuario.php";
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
                    <div class="alert alert-primary" role="alert">
                        <center> Setor para Cadastro de Produtos </center>
                    </div>
                </div>
            </div>    
            <center>
            <br><br><br>
            <div class="card" style="width: 20rem;">
            <form class="container-sm" action="../add-product-instance.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nome do produto</label>
                    <input type="text" class="form-control" name="descricao">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Quantidade</label>
                    <input type="number" class="form-control" name="quantidade">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Preço</label>
                    <input type="number" class="form-control" name="preco">
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
            </div>
            </center>     
    </body>
</html>