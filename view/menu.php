<div class="sidebar">
    <div class="logo_content">
        <div class="logo">
            <div class="logo_name text-center">Alcool<span class="bold text-red">+</span></div>
        </div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav_list">
        <?php
        session_start();
        if ($_SESSION['id_tipo'] == null) {
            echo '<li>'
                . '<a href="dashboard.php">'
                . '<i class="bx bx-grid-alt"></i>'
                . '<span class="links_name">Dashboard</span>'
                . '</a>'
                . '<span class="tooltip">Dashboard</span>'
                . '</li>';
        }
        ?>
        <li>
            <a href="produto.php">
                <i class='bx bx-box'></i>
                <span class="links_name">Produtos</span>
            </a>
            <span class="tooltip">Produtos</span>
        </li>
        <?php
        if ($_SESSION['id_tipo'] == null) {
            echo '<li>'
                . '<a href="grupo_risco.php">'
                . '<i class="bx bx-minus-circle"></i>'
                . '<span class="links_name">Grupo Risco</span>'
                . '</a>'
                . '<span class="tooltip">Grupo Risco</span>'
                . '</li>';

            echo '<li>'
                . '<a href="user.php">'
                . '<i class="bx bx-user"></i>'
                . '<span class="links_name">Usuários</span>'
                . '</a>'
                . '<span class="tooltip">Usuários</span>'
                . '</li>';

            echo '<li>'
                . '<a href="tipo_pessoa.php">'
                . '<i class="bx bx-cog"></i>'
                . '<span class="links_name">Tipo Pessoa</span>'
                . '</a>'
                . '<span class="tooltip">Tipo Pessoa</span>'
                . '</li>';

            echo '<li>'
                . '<a href="preco.php">'
                . '<i class="bx bx-dollar"></i>'
                . '<span class="links_name">Preço Máximo</span>'
                . '</a>'
                . '<span class="tooltip">Preço Máximo</span>'
                . '</li>';
        }
        ?>

        <li>
            <a href="logout.php">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Logout</span>
            </a>
            <span class="tooltip">Logout</span>
        </li>
    </ul>
    <div class="content">
        <div class="user">
            <div class="user_details">
                <div class="name_job">
                    <div class="name">Bem-Vindo</div>
                    <?php
                    if (isset($_SESSION['nome'])) {
                        echo '<div class="job">' . $_SESSION['nome'] . '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>