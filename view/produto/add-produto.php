<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
            <form action="../add-product-instance.php" method="POST">
                <p>Cadastrar produto:</p>
                Nome do produto: <input type="text" name="name">
                Quantidade: <input type="number" name="quantidade">
                Descricão: <input type="text" name="descricao">
                Preço: <input type="text" name="preco">
                <button type="submit">cadastrar</button>
            </form>


            <div class="card">
                <div class="card-header">
                    <div class="alert alert-warning" role="alert">
                        Setor para Cadastro de Produtos
                    </div>
                </div>
            </div>    
            
            <div class="card" style="width: 18rem;">
            <form class="container-sm">
                <div class="mb-3">
                    <label for="producttype" class="form-label">Nome do Produto</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="productHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
            </div>     
    </body>
</html>