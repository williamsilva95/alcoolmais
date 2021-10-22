<?php
    include'../config/Conexao.class.php';
    include '../model/dao/UserDAO.class.php';
    include '../model/domain/User.class.php';

    if ($_POST){
    
        if(isset($_POST['btnInserir'])){

            $documento = $_POST['documento'];
            $con = mysqli_connect('localhost', 'root', '') or die("Erro de conexão");
            $banco = mysqli_select_db($con, 'sistema_alcoolmais') or die("Erro ao selecionar o banco de dados");
            $sql = mysqli_query($con, "SELECT * FROM users WHERE documento = '$documento'");
            $resultado = mysqli_fetch_assoc($sql);

            if($documento = $resultado['documento']){
            echo'<script> '
                . 'alert("CPF ou CNPJ já existente em nossa base de dados, tente novamente com outro.");'
                . 'window.location.href = "/sistema_alcoolmais/view/register.php"'
                . '</script>';
            }else{
                $user = new User('', $_POST['email'], $_POST['senha'], $_POST['nome'], $_POST['documento'], $_POST['cidade']
                ,$_POST['id_grupo'], $_POST['id_tipo']);
                $uDAO = new UserDAO();
                $resultado = $uDAO->inserir($user);
                if ($resultado){
                    echo '<script> '
                        . 'alert("Inserido com sucesso");'
                        . 'window.location.href = "/sistema_alcoolmais/index.php"'
                        . '</script>';
                } else {
                    echo '<script> '
                        . 'alert("Erro ao inserir!");'
                        . 'window.location.href = "/sistema_alcoolmais/index.php"'
                    . '</script>';
                    }
                }
        } else if(isset($_POST['btnAlterar'])){
            $user = new User($_POST['id'], $_POST['email'],$_POST['senha'],$_POST['nome'],$_POST['documento'],$_POST['cidade']
            ,$_POST['id_grupo'],$_POST['id_tipo']);
            $uDAO = new UserDAO();
            $resultado = $uDAO->alterar($user);
            if ($resultado){
                echo '<script> '
                        . 'alert("Alterado com sucesso");'
                        . 'window.location.href = "/sistema_alcoolmais/index.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao alterar!");'
                        . 'window.location.href = "/sistema_alcoolmais/index.php"'
                    . '</script>';
            }
        } else if(isset($_POST['btnExcluir'])){
            $user = new User($_POST['id'],'', '','','','','','');
            $uDAO = new UserDAO();
            $resultado = $uDAO->excluir($user);
            if ($resultado){
                echo '<script> '
                        . 'alert("Excluído com sucesso");'
                        . 'window.location.href = "/sistema_alcoolmais/index.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao excluir!");'
                        . 'window.location.href = "/sistema_alcoolmais/index.php"'
                    . '</script>';
            }
        }
        
    }
