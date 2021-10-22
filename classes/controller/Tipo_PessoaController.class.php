<?php
    include'../config/Conexao.class.php';
    include '../model/dao/Tipo_PessoaDAO.class.php';
    include '../model/domain/Tipo_Pessoa.class.php';

    if ($_POST){
    
        if(isset($_POST['btnInserir'])){
            $tipo_pessoa = new Tipo_Pessoa('', $_POST['descricao']);
            $tDAO = new Tipo_PessoaDAO();
            $resultado = $tDAO->inserir($tipo_pessoa);
            if ($resultado){
                echo '<script> '
                        . 'alert("Inserido com sucesso");'
                        . 'window.location.href = "/sistema_alcoolmais/view/tipo_pessoa.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao inserir!");'
                        . 'window.location.href = "/sistema_alcoolmais/view/tipo_pessoa.php"'
                    . '</script>';
            }
        } else if(isset($_POST['btnAlterar'])){
            $tipo_pessoa = new Tipo_Pessoa($_POST['id'], $_POST['descricao']);
            $tDAO = new Tipo_PessoaDAO();
            $resultado = $tDAO->alterar($tipo_pessoa);
            if ($resultado){
                echo '<script> '
                        . 'alert("Alterado com sucesso");'
                        . 'window.location.href = "/sistema_alcoolmais/view/tipo_pessoa.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao alterar!");'
                        . 'window.location.href = "/sistema_alcoolmais/view/tipo_pessoa.php"'
                    . '</script>';
            }
        } else if(isset($_POST['btnExcluir'])){
            $tipo_pessoa = new Tipo_Pessoa($_POST['id'],'');
            $tDAO = new Tipo_PessoaDAO();
            $resultado = $tDAO->excluir($tipo_pessoa);
            if ($resultado){
                echo '<script> '
                        . 'alert("Excluído com sucesso");'
                        . 'window.location.href = "/sistema_alcoolmais/view/tipo_pessoa.php"'
                    . '</script>';
            } else {
                echo '<script> '
                        . 'alert("Erro ao excluir!");'
                        . 'window.location.href = "/sistema_alcoolmais/view/tipo_pessoa.php"'
                    . '</script>';
            }
        }
        
    }


?>