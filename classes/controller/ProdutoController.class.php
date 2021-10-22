<?php
include '../config/Conexao.class.php';
include '../model/dao/ProdutoDAO.class.php';
include '../model/domain/Produto.class.php';

if ($_POST) {

    if (isset($_POST['btnInserir'])) {

        $preco = $_POST['preco'];
        $con = mysqli_connect('localhost', 'root', '') or die("Erro de conexão");
        $banco = mysqli_select_db($con, 'sistema_alcoolmais') or die("Erro ao selecionar o banco de dados");
        $sql = mysqli_query($con, "SELECT preco FROM preco WHERE id = 1");
        $resultado = mysqli_fetch_assoc($sql);

        if ($preco > $resultado['preco']) {
            echo '<script> '
                . 'alert("O preço máximo de R$' . $resultado['preco'] . ' por produto foi ultrapassado");'
                . 'window.location.href = "/sistema_alcoolmais/view/add_produto.php"'
                . '</script>';
        } else {
            $produto = new Produto('', $_POST['nome'], $_POST['preco'], $_POST['descricao']);
            $pDAO = new ProdutoDAO();
            $resultado = $pDAO->inserir($produto);
            if ($resultado) {
                echo '<script> '
                    . 'alert("Inserido com sucesso");'
                    . 'window.location.href = "/sistema_alcoolmais/view/Produto.php"'
                    . '</script>';
            } else {
                echo '<script> '
                    . 'alert("Erro ao Inserir!");'
                    . 'window.location.href = "/sistema_alcoolmais/view/Produto.php"'
                    . '</script>';
            }
        }
    } else if (isset($_POST['btnAlterar'])) {
        
        $preco = $_POST['preco'];
        $con = mysqli_connect('localhost', 'root', '') or die("Erro de conexão");
        $banco = mysqli_select_db($con, 'sistema_alcoolmais') or die("Erro ao selecionar o banco de dados");
        $sql = mysqli_query($con, "SELECT preco FROM preco WHERE id = 1");
        $resultado = mysqli_fetch_assoc($sql);

        if ($preco > $resultado['preco']) {
            echo '<script> '
                . 'alert("O preço máximo de R$' . $resultado['preco'] . ' por produto foi ultrapassado");'
                . 'window.location.href = "/sistema_alcoolmais/view/Produto.php"'
                . '</script>';
        }else{
            $produto = new Produto($_POST['id'], $_POST['nome'], $_POST['preco'], $_POST['descricao']);
            $pDAO = new ProdutoDAO();
            $resultado = $pDAO->alterar($produto);
            if ($resultado) {
                echo '<script> '
                    . 'alert("Alterado com sucesso");'
                    . 'window.location.href = "/sistema_alcoolmais/view/Produto.php"'
                    . '</script>';
            } else {
                echo '<script> '
                    . 'alert("Erro ao alterar!");'
                    . 'window.location.href = "/sistema_alcoolmais/view/Produto.php"'
                    . '</script>';
            }
        }
    } else if (isset($_POST['btnExcluir'])) {
        $produto = new Produto($_POST['id'], '', '', '');
        $pDAO = new ProdutoDAO();
        $resultado = $pDAO->excluir($produto);
        if ($resultado) {
            echo '<script> '
                . 'alert("Excluído com sucesso");'
                . 'window.location.href = "/sistema_alcoolmais/view/Produto.php"'
                . '</script>';
        } else {
            echo '<script> '
                . 'alert("Erro ao excluir!");'
                . 'window.location.href = "/sistema_alcoolmais/view/Produto.php"'
                . '</script>';
        }
    }
}
