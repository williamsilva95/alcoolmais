<?php
    include'../config/Conexao.class.php';
    include '../model/dao/PrecoDAO.class.php';
    include '../model/domain/Preco.class.php';

    if ($_POST){
    
        if(isset($_POST['btnInserir'])){
            $preco = new Preco('', $_POST['preco']);
            $pDAO = new PrecoDAO();
            $resultado = $pDAO->inserir($preco);
            if ($resultado){
                echo '<script> '
                        . 'alert("Inserido com sucesso");'
                        . 'window.location.href = "/sistema_alcoolmais/view/preco.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao inserir!");'
                        . 'window.location.href = "/sistema_alcoolmais/view/preco.php"'
                    . '</script>';
            }
        } else if(isset($_POST['btnAlterar'])){
            $preco = new Preco($_POST['id'], $_POST['preco']);
            $pDAO = new PrecoDAO();
            $resultado = $pDAO->alterar($preco);
            if ($resultado){
                echo '<script> '
                        . 'alert("Alterado com sucesso");'
                        . 'window.location.href = "/sistema_alcoolmais/view/preco.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao alterar!");'
                        . 'window.location.href = "/sistema_alcoolmais/view/preco.php"'
                    . '</script>';
            }
        } else if(isset($_POST['btnExcluir'])){
            $preco = new Preco($_POST['id'],'');
            $pDAO = new PrecoDAO();
            $resultado = $pDAO->excluir($preco);
            if ($resultado){
                echo '<script> '
                        . 'alert("Excluído com sucesso");'
                        . 'window.location.href = "/sistema_alcoolmais/view/preco.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao excluir!");'
                        . 'window.location.href = "/sistema_alcoolmais/view/preco.php"'
                    . '</script>';
            }
        }
        
    }


?>