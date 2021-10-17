<?php require '../Model/ProdutoDAO.php' ?>
<html>
    <head>
    <link href="acess/style.css" rel="stylesheet">
    </head>
<body>
    <nav>
        <div id="menu">
            <ul>
                <li><a href="../produto/add-produto.php">Cadastrar Produto</a></li>
                <li><a href="../produto/decrement-produto.php">Descrementar Produto</a></li>
                <li><a href="../produto/delete-produto.php">Remover Produto</a></li>
                <li><a href="../produto/increment-produto.php">Incrementar Produto</a></li>
                <li><a href="../barcodes.php">Usuario</a></li>
            </ul>
        </div>
    </nav>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome:</th>
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
      <td><?php echo $result['NomeProduto'] ?></td>
      <td><?php echo $result['DescricaoProduto'] ?></td>
      <td><?php echo $result['PrecoProduto'] ?></td>
    </tr>
    <?php  } ?>
  </tbody>
</table>
</body>
</html>