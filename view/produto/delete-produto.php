<?php require_once "../acess/index.php"; ?>

<html>
    <head>
        <link href="../bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="card" >
                <div class="card-header">
                    <div class="alert alert-danger" role="alert">
                        <center> Setor para Remover Produtos </center>
                    </div>
                </div>
            </div>    
            <center>
            <br><br>
            <div class="card" style="width: 20rem;">
            <form class="container-sm" action="../delete-product-instance.php" method="POST">
                <div class="mb-3">
                    <label for="producttype" class="form-label">id do produto</label>
                    <input type="number" class="form-control" name="idProduto">
                </div>
                <button type="submit" class="btn btn-danger">Remover</button>
            </form>
            </div>
            </center>
    <body>
        </form>
    </body>
</html>