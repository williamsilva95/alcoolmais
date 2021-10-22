<?php

 

class UserDAO {
    
    private $sql;
    
    public function inserir($objUser) {
        $this->sql = "INSERT INTO users (email, senha, nome, documento, cidade, id_grupo, id_tipo) 
            VALUES (:email, :senha, :nome, :documento, :cidade, :id_grupo, :id_tipo)";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon()->prepare($this->sql);
            $p->bindValue(":email", $objUser->getEmail());
            $p->bindValue(":senha", $objUser->getSenha());
            $p->bindValue(":nome", $objUser->getNome());
            $p->bindValue(":documento", $objUser->getDocumento());
            $p->bindValue(":cidade", $objUser->getCidade());
            $p->bindValue(":id_grupo", $objUser->getIdGrupo());
            $p->bindValue(":id_tipo", $objUser->getIdTipo());
            return $p->execute();
        } catch (Exception $e){
            return "Erro ao inserir! ".$e->getMessage();
        }
    }

    public function alterar($objUser) {
        $this->sql = "UPDATE users set email = :email, senha = :senha, nome = :nome, documento = :documento, cidade = :cidade, 
        id_grupo = :id_grupo, id_tipo = :id_tipo WHERE id = :id ";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon()->prepare($this->sql);
            $p->bindValue(":email", $objUser->getEmail());
            $p->bindValue(":senha", $objUser->getSenha());
            $p->bindValue(":nome", $objUser->getNome());
            $p->bindValue(":cpf", $objUser->getDocumento());
            $p->bindValue(":cidade", $objUser->getCidade());
            $p->bindValue(":id_grupo", $objUser->getIdGrupo());
            $p->bindValue(":id_tipo", $objUser->getIdTipo());
            $p->bindValue(":id", $objUser->getId());
            return $p->execute();
        } catch (Exception $e){
            return "Erro ao alterar! ".$e->getMessage();
        }
    }
    
    public function excluir($objUser){
        $this->sql = "DELETE FROM users WHERE id = :id ";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon()->prepare($this->sql);
            $p->bindValue(":id", $objUser->getId());
            return $p->execute();
        } catch (Exception $e){
            return "Erro ao excluir! ".$e->getMessage();
        }
    }
    
    public function consultarId($id){
        $this->sql = "SELECT * from users where id = ".$id;
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon();
            return $p->query($this->sql)->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }
    
    public function consultar(){
        $this->sql = "SELECT * from users";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon();
            return $p->query($this->sql);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }
    
    

}
?>