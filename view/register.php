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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Alcool+</title>
</head>

<body>
    <main class="container">
        <h2>Cadastrar</h2>
        <form action="../classes/controller/UserController.class.php" method="POST">
            <div class="input-field">
                <input type="text" name="nome" id="nome" placeholder="Nome" required>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="email" name="email" id="email" placeholder="Email" required>
                <div class="underline"></div>
            </div>
            <br>
            <div class="input-field">
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
                <div class="underline"></div>
            </div>
            <br>
            <div class="input-field">
                <select name="id_tipo" id="id_tipo" required>
                    <option disabled selected>Tipo Pessoa</option>
                    <?php
                    include("../classes/config/Conexao.class.php");
                    include("../classes/model/dao/Tipo_PessoaDAO.class.php");
                    $objDAO = new Tipo_PessoaDAO();
                    $resultado = $objDAO->consultar();
                    while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <option value="<?= $linha['id'] ?>"><?= $linha['descricao'] ?></option>
                    <?php
                    }
                    ?>
                </select>
                <div class="underline"></div>
            </div>
            <br>
            <div class="input-field">
                <input type="text" name="documento" id="documento" placeholder="CPF ou CNPJ" maxlength="14" required>
                <div class="underline"></div>
            </div>
            <br>
            <div class="input-field">
                <input type="text" name="cidade" id="cidade" placeholder="Cidade" required>
                <div class="underline"></div>
            </div>
            <br>
            <div class="input-field">
                <select name="id_grupo" id="id_grupo" required>
                    <option disabled selected>Grupo de Risco</option>
                    <?php
                    include("../classes/model/dao/Grupo_RiscoDAO.class.php");
                    $objDAO = new Grupo_RiscoDAO();
                    $resultado = $objDAO->consultar();
                    while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <option value="<?= $linha['id'] ?>"><?= $linha['descricao'] ?></option>
                    <?php
                    }
                    ?>
                </select>
                <div class="underline"></div>
            </div>

            <input type="submit" value="Cadastrar" name="btnInserir">
        </form>
        <!-- Optional JavaScript -->

        <script src="assets/js/main.js"></script>
</body>

</html>
</main>