<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/navbar.css" rel="stylesheet">
    <link href="assets/css/produto.css" rel="stylesheet">

    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">

    <title>Alcool+</title>
</head>

<body>

    <?php include("menu.php"); ?>
    <div class="home_content">
        <br>
        <main class="container">
            <h2>Produtos</h2>
            <?php
            if ($_SESSION['id_tipo'] == null || $_SESSION['id_tipo'] == 2) {
            ?>
                <div class="footer">
                    <div class="social-fields">
                        <div class="social-field register">
                            <a href="add_produto.php">
                                Cadastrar
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <br>
            <div class="main">
                <ul class="cards">
                    <?php
                    include("../classes/config/Conexao.class.php");
                    include("../classes/model/dao/ProdutoDAO.class.php");
                    include("../classes/model/dao/UserDAO.class.php");
                    $objEmpresaDAO = new UserDAO();
                    $objDAO = new ProdutoDAO();
                    $consulta = $objDAO->consultar();
                    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <li class="cards_item">
                            <div class="container">
                                <div class="card">
                                    <div class="imgBx">
                                        <img src="assets/image/icon.png">
                                    </div>
                                    <div class="contentBx">
                                        <h1><?= $linha['nome'] ?></h1>
                                        <div class="size">
                                            <h3><?= $linha['descricao'] ?></h3>
                                        </div>
                                        <br>
                                        <div class="color">
                                            <h3>R$ <?= $linha['preco'] ?></h3>
                                        </div>
                                        <br>
                                        <?php
                                        if ($_SESSION['id_tipo'] == null || $_SESSION['id_tipo'] == 2) {
                                        ?>
                                            <a href="edit_produto.php?id=<?= $linha['id'] ?>">Editar</a>
                                            <a href="delete_produto.php?id=<?= $linha['id'] ?>">Excluir</a>
                                        <?php
                                        } else {
                                        ?>
                                            <a href="compra.php" id="btn-comprar">Comprar</a>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </main>
    </div>


    <!-- Optional JavaScript -->

    <script src="assets/js/main.js"></script>
</body>

</html>