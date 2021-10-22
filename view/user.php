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
    <link href="assets/css/user.css" rel="stylesheet">

    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">

    <title>Alcool+</title>
</head>

<body>

    <?php include("menu.php"); ?>
    <div class="home_content">
        <br>
        <main class="container">
            <h2>Usuários</h2>
            <br>
            <table>
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Nome
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Cidade
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("../classes/config/Conexao.class.php");
                    include("../classes/model/dao/UserDAO.class.php");
                    $objDAO = new UserDAO();
                    $consulta = $objDAO->consultar();
                    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <tr>
                            <td>
                                <?= $linha['id'] ?>
                            </td>
                            <td>
                                <?= $linha['nome'] ?>
                            </td>
                            <td>
                                <?= $linha['email'] ?>
                            </td>
                            <td>
                                <?= $linha['cidade'] ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </main>
    </div>


    <!-- Optional JavaScript -->

    <script src="assets/js/main.js"></script>
</body>

</html>