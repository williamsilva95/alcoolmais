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
    <link href="assets/css/dashboard.css" rel="stylesheet">

    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">

    <title>Alcool+</title>
</head>

<body>

    <?php include("menu.php"); ?>
    <div class="home_content">
        <section class="home-section">

            <div class="home-content">
                <div class="overview-boxes">
                    <div class="box">
                        <div class="right-side">
                            <div class="box-topic">Total Usuários</div>
                            <?php
                            $con = mysqli_connect('localhost', 'root', '') or die("Erro de conexão");
                            $banco = mysqli_select_db($con, 'sistema_alcoolmais') or die("Erro ao selecionar o banco de dados");
                            $sql = mysqli_query($con, "SELECT count(*) as total FROM users");
                            $resultado = mysqli_fetch_assoc($sql);
                            echo '<div class="number">' . $resultado['total'] . '</div>'
                            ?>
                            <div class="indicator">
                                <i class='bx bx-up-arrow-alt'></i>
                                <span class="text">Atualizado ao cadastrar</span>
                            </div>
                        </div>
                        <i class='bx bx-user cart'></i>
                    </div>
                    <div class="box">
                        <div class="right-side">
                            <div class="box-topic">Total Produtos</div>
                            <?php
                            $con = mysqli_connect('localhost', 'root', '') or die("Erro de conexão");
                            $banco = mysqli_select_db($con, 'sistema_alcoolmais') or die("Erro ao selecionar o banco de dados");
                            $sql = mysqli_query($con, "SELECT count(*) as total FROM produtos");
                            $resultado = mysqli_fetch_assoc($sql);
                            echo '<div class="number">' . $resultado['total'] . '</div>'
                            ?>
                            <div class="indicator">
                                <i class='bx bx-up-arrow-alt'></i>
                                <span class="text">Atualizado ao cadastrar</span>
                            </div>
                        </div>
                        <i class='bx bx-box cart two'></i>
                    </div>
                    <div class="box">
                        <div class="right-side">
                            <div class="box-topic">Preço Máximo</div>
                            <?php
                            $con = mysqli_connect('localhost', 'root', '') or die("Erro de conexão");
                            $banco = mysqli_select_db($con, 'sistema_alcoolmais') or die("Erro ao selecionar o banco de dados");
                            $sql = mysqli_query($con, "SELECT preco FROM preco WHERE id = 1");
                            $resultado = mysqli_fetch_assoc($sql);
                            echo '<div class="number">R$' . $resultado['preco'] . '</div>'
                            ?>
                            <div class="indicator">
                                <i class='bx bx-up-arrow-alt'></i>
                                <span class="text">Manter mesmo preço</span>
                            </div>
                        </div>
                        <i class='bx bx-dollar cart three'></i>
                    </div>
                    <div class="box">
                        <div class="right-side">
                            <div class="box-topic">Total Grupo Risco</div>
                            <?php
                            $con = mysqli_connect('localhost', 'root', '') or die("Erro de conexão");
                            $banco = mysqli_select_db($con, 'sistema_alcoolmais') or die("Erro ao selecionar o banco de dados");
                            $sql = mysqli_query($con, "SELECT count(*) as total FROM grupo_risco");
                            $resultado = mysqli_fetch_assoc($sql);
                            echo '<div class="number">' . $resultado['total'] . '</div>'
                            ?>
                            <div class="indicator">
                                <i class='bx bx-up-arrow-alt'></i>
                                <span class="text">Atualizado ao cadastrar</span>
                            </div>
                        </div>
                        <i class='bx bx-minus-circle cart four'></i>
                    </div>
                </div>

                <div class="sales-boxes">
                    <div class="recent-sales box">
                        <div class="title">Usuários Recentes</div>
                        <div class="sales-details">
                            <ul class="details">
                                <li class="topic">Id</li>
                                <?php
                                include("../classes/config/Conexao.class.php");
                                include("../classes/model/dao/UserDAO.class.php");
                                $objDAO = new UserDAO();
                                $consulta = $objDAO->consultar();
                                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                    <li><a href="#"><?= $linha['id'] ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                            <ul class="details">
                                <li class="topic">Nome</li>
                                <?php
                                $objDAO = new UserDAO();
                                $consulta = $objDAO->consultar();
                                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <li><a href="#"><?= $linha['nome'] ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                            <ul class="details">
                                <li class="topic">Email</li>
                                <?php
                                $objDAO = new UserDAO();
                                $consulta = $objDAO->consultar();
                                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <li><a href="#"><?= $linha['email'] ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                            <ul class="details">
                                <li class="topic">Cidade</li>
                                <?php
                                $objDAO = new UserDAO();
                                $consulta = $objDAO->consultar();
                                while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                                ?>
                                <li><a href="#"><?= $linha['cidade'] ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>

                        </div>
                    </div>
                    <div class="top-sales box">
                        <div class="title">Produtos</div>
                        <ul class="top-sales-details">
                            <?php
                            include("../classes/model/dao/ProdutoDAO.class.php");
                            $objDAO = new ProdutoDAO();
                            $consulta = $objDAO->consultar();
                            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                            ?>
                                <li>
                                    <a href="#">
                                        <img src="assets/image/icon.png" alt="">
                                        <span class="product"><?= $linha['nome'] ?></span>
                                    </a>
                                    <span class="price">R$ <?= $linha['preco'] ?></span>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>



    <!-- Optional JavaScript -->

    <script src="assets/js/main.js"></script>
</body>

</html>