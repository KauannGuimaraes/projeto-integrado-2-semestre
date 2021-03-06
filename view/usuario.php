
<?php require '../Model/ProdutoDAO.php' ?>
<?php
    session_start();    
    require "../Controller/Usuario.php";
    require "../Model/DashBoardDAO.php";
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
                    <li><a href="usuario.php"><?php echo $_SESSION['username'] ?></a></li>
                </ul>
            </div>
        </nav><br><br>
        <center>
            <a href="LoginSystem/logout.php" class="btn btn-danger">Logout</a>
        </center>
        <?php
            $dash = new DashBoardDAO();
            $totalDeVendas = $dash->ConsultarValor();
            $OrdenarMaiorPreço = $dash->OrdenarMaiorPreço();
            $OrdenarSaidaRecorente = $dash->OrdenarSaidaRecorente();
            $ExibirTotalProdutos = $dash->ExibirTotalProdutos();
            $ExibirQuantidadeClientes = $dash->ExibirClientes();
            $ExibirQuantidadeFornecedores = $dash->QuantidadeFornecedor();
            foreach($totalDeVendas as $totalDeVendas){
            echo "valor total em vendas: ".$totalDeVendas['sum(Valor)']."<br>";
            }
            echo "maiores compradores: ";
            foreach($OrdenarMaiorPreço as $OrdenarMaiorPreço){
                echo $OrdenarMaiorPreço['NomePessoa']." valor: ";
                echo $OrdenarMaiorPreço['Valor'].", ";
            }
            echo "<br>";
            echo "Saidas recorrentes: ";
            foreach($OrdenarSaidaRecorente as $OrdenarSaidaRecorente){
                
                echo $OrdenarSaidaRecorente['DescricaoProduto'].", ";
            }
            echo "<br>";
            foreach($ExibirTotalProdutos as $ExibirTotalProdutos){
                echo "Total de produtos: ".$ExibirTotalProdutos['count(*)']."<br>";
            }
            foreach($ExibirQuantidadeClientes as $ExibirQuantidadeClientes){
                echo "Quantidade de clientes: ".$ExibirQuantidadeClientes['COUNT(*)']."<br>";
            }
            foreach($ExibirQuantidadeFornecedores as $ExibirQuantidadeFornecedores){
                echo "Quantidade de fornecedores: ".$ExibirQuantidadeFornecedores['count(*)']."<br>";
            }
        ?>
    </body>
</html>