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
            min-height: 40vh;
            padding: 2rem;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <?php include("menu.php"); ?>
    <main class="container">
        <h2>Cadastrar</h2>
        <form action="../classes/controller/ProdutoController.class.php" method="POST">
            <div class="input-field">
                <input type="text" name="nome" id="nome" placeholder="Nome" required>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text-area" name="descricao" id="descricao" placeholder="Descrição" required>
                <div class="underline"></div>
            </div>
            <br>
            <div class="input-field">
                <input type="text" name="preco" id="preco" placeholder="Preço" required>
                <div class="underline"></div>
            </div>
            <br>

            <input type="submit" value="Cadastrar" name="btnInserir">
        </form>
        <!-- <div class="home_content">
     <div class="text">Dashboard</div>
     
   </div> -->


        <!-- Optional JavaScript -->

        <script src="assets/js/main.js"></script>
</body>

</html>