<html>
    <head>
    <link href="../acess/style.css" rel="stylesheet">
    </head>
<body>
    <nav>
        <div id="menu">
            <ul>
                <li><a href="../produto/add-produto.php">Cadastrar Produto</a></li>
                <li><a href="../produto/decrement-produto.php">Descrementar Produto</a></li>
                <li><a href="../produto/delete-produto.php">Remover Produto</a></li>
                <li><a href="../produto/increment-produto.php">Incrementar Produto</a></li>
                <li><a href="../estoque.php">Estoque</a></li>
                <li><a href="../usuario.php"><?php session_start(); echo $_SESSION['username'];
                ?></a></li>
            </ul>
        </div>
    </nav>
</body>
</html>