<?php require '../Model/ProdutoDAO.php' ?>
<?php
  session_start();    
  require "../Controller/Usuario.php";
  $login = new Usuario();
  $login->checkLogin();
?>
<html>
  <head>
    <link href="acess/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <nav>
      <div id="menu">
        <ul>
          <li><a href="produto/add-produto.php">Cadastrar Produto</a></li>
          <li><a href="produto/decrement-produto.php">Descrementar Produto</a></li>
          <li><a href="produto/delete-produto.php">Remover Produto</a></li>
          <li><a href="produto/increment-produto.php">Incrementar Produto</a></li>
          <li><a href="estoque.php">Estoque</a></li>
          <li><a href="usuario.php"><?php echo $_SESSION['username'];?></a></li>
        </ul>
      </div>
    </nav><br><br>
    <center>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome do produto:</th>
            <th scope="col">Quantidade:</th>
            <th scope="col">Preço:</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $productDao = new ProdutoDAO();
            $result = $productDao->selecionaProdutos();
            foreach($result as $result){ ?>
          <tr>
            <td><?php echo $result['idProduto'] ?></td>
            <td><?php echo $result['DescricaoProduto'] ?></td>
            <td><?php echo $result['QuantidadeProduto'] ?></td>
            <td><?php echo $result['PrecoProduto'] ?></td>
          </tr>
          <?php  } ?>
        </tbody>
      </table>
    </center>
  </body>
</html>