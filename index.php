<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- CSS -->
    <link href="view/assets/css/style.css" rel="stylesheet">
    <link href="view/assets/css/navbar.css" rel="stylesheet">
    <link href="view/assets/css/login.css" rel="stylesheet">

    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">

    <title>Alcool+</title>
  </head>
  <body>
    
    <main class="container">
        <h2>Login</h2>
        <form action="view/valida_login.php" method="post">
            <div class="input-field">
                <input type="email" name="email" id="email"
                    placeholder="Email">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="password" name="senha" id="senha"
                    placeholder="Senha">
                <div class="underline"></div>
            </div>

            <input type="submit" value="Entrar">
        </form>

        <div class="footer">
            <span>ou</span>
            <div class="social-fields">
                <div class="social-field register">
                    <a href="view/register.php">
                        Cadastrar
                    </a>
                </div>
            </div>
        </div>
    </main>
    <!-- <div class="home_content">
     <div class="text">Dashboard</div>
     
   </div> -->
    
	
    <!-- Optional JavaScript -->

    <script src="view/assets/js/main.js"></script>
  </body>
</html>