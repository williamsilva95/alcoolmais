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
    <link href="assets/css/login.css" rel="stylesheet">

    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">

    <title>Alcool+</title>
    <style>
        main.container {
            background: white;
            min-width: 390px;
            min-height: 30vh;
            padding: 2rem;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <?php include("menu.php"); ?>
    <main class="container">
        <h2>Editar</h2>
        <?php
        include("../classes/config/Conexao.class.php");
        include("../classes/model/dao/PrecoDAO.class.php");
        if (isset($_GET['id'])) {
            $objDAO = new PrecoDAO();
            $resultado = $objDAO->consultarId($_GET['id']);

        ?>
            <form method="POST" action="../classes/controller/PrecoController.class.php">
                <input type="hidden" name="id" value="<?= $resultado['id'] ?>" />
                <div class="input-field">
                    <input type="text" name="preco" id="preco" placeholder="Preço Máximo" value="<?= $resultado['preco'] ?>" required>
                    <div class="underline"></div>
                </div>

                <input type="submit" value="Alterar" id="btnAlterar" name="btnAlterar">
            </form>
        <?php
        }
        ?>
        <!-- Optional JavaScript -->

        <script src="assets/js/main.js"></script>
</body>

</html>