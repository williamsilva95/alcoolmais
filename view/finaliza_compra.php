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
            min-height: 35vh;
            padding: 2rem;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
        }

        .btn-voltar {
            margin-top: 2rem;
            padding: 0.4rem;
            width: 100%;
            background: #69A8DB;
            cursor: pointer;
            color: white;
            font-size: 1rem;
            font-weight: 300;
            border-radius: 4px;
            transition: all 0.3s ease;
            text-decoration: none;
            margin-left: 45%;
        }

        .btn-voltar:hover {
            letter-spacing: 0.5px;
            background: #69A8DB;
        }

        .text-fim {
            font-weight: 600;
            margin-top: 4rem;
            position: relative;
            color: #69A8DB;
            text-align: center;
        }

        .text-obg {
            font-weight: 600;
            margin-top: 1rem;
            margin-bottom: 2rem;
            position: relative;
            color: #D13235;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php include("menu.php"); ?>
    <?php
    $qtd = $_POST['quantidade'];

    if($qtd > 2){
        echo'<main class="container">'
        .'<h1 class="text-fim">Limite de compra excedido</h1>'
        .'<h3 class="text-obg">Máximo dois por produto</h3>'
        .'<a href="compra.php" role="button" class="btn-voltar">Voltar</a>'
    .'</main>';
    }else{
        echo'<main class="container">'
        .'<h1 class="text-fim">Compra finalizada com sucesso</h1>'
        .'<h3 class="text-obg">Obrigado!</h3>'
        .'<a href="produto.php" role="button" class="btn-voltar">Voltar</a>'
    .'</main>';
    }
    
    ?>
    
    <!-- Optional JavaScript -->
    <script src="assets/js/main.js"></script>
</body>

</html>