<?php
    include'../config/Conexao.class.php';
    include '../model/dao/Grupo_RiscoDAO.class.php';
    include '../model/domain/Grupo_Risco.class.php';

    if ($_POST){
    
        if(isset($_POST['btnInserir'])){
            $grupo_risco = new Grupo_Risco('', $_POST['descricao']);
            $aDAO = new Grupo_RiscoDAO();
            $resultado = $aDAO->inserir($grupo_risco);
            if ($resultado){
                echo '<script> '
                        . 'alert("Inserido com sucesso");'
                        . 'window.location.href = "/sistema_alcoolmais/view/grupo_risco.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao inserir!");'
                        . 'window.location.href = "/sistema_alcoolmais/view/grupo_risco.php"'
                    . '</script>';
            }
        } else if(isset($_POST['btnAlterar'])){
            $grupo_risco = new Grupo_Risco($_POST['id'], $_POST['descricao']);
            $aDAO = new Grupo_RiscoDAO();
            $resultado = $aDAO->alterar($grupo_risco);
            if ($resultado){
                echo '<script> '
                        . 'alert("Alterado com sucesso");'
                        . 'window.location.href = "/sistema_alcoolmais/view/grupo_risco.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao alterar!");'
                        . 'window.location.href = "/sistema_alcoolmais/view/grupo_risco.php"'
                    . '</script>';
            }
        } else if(isset($_POST['btnExcluir'])){
            $grupo_risco = new Grupo_Risco($_POST['id'],'');
            $aDAO = new Grupo_RiscoDAO();
            $resultado = $aDAO->excluir($grupo_risco);
            if ($resultado){
                echo '<script> '
                        . 'alert("Excluído com sucesso");'
                        . 'window.location.href = "/sistema_alcoolmais/view/grupo_risco.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao excluir!");'
                        . 'window.location.href = "/sistema_alcoolmais/view/grupo_risco.php"'
                    . '</script>';
            }
        }
        
    }


?>