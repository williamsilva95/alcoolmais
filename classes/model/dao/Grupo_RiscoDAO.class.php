<?php

 

class Grupo_RiscoDAO {
    
    private $sql;
    
    public function inserir($objGrupo) {
        $this->sql = "INSERT INTO grupo_risco (descricao) VALUES (:descricao)";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon()->prepare($this->sql);
            $p->bindValue(":descricao", $objGrupo->getDescricao());
            return $p->execute();
        } catch (Exception $e){
            return "Erro ao inserir! ".$e->getMessage();
        }
    }

    public function alterar($objGrupo) {
        $this->sql = "UPDATE grupo_risco set descricao = :descricao WHERE id = :id ";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon()->prepare($this->sql);
            $p->bindValue(":descricao", $objGrupo->getDescricao());
            $p->bindValue(":id", $objGrupo->getId());
            return $p->execute();
        } catch (Exception $e){
            return "Erro ao alterar! ".$e->getMessage();
        }
    }
    
    public function excluir($objGrupo){
        $this->sql = "DELETE FROM grupo_risco WHERE id = :id ";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon()->prepare($this->sql);
            $p->bindValue(":id", $objGrupo->getId());
            return $p->execute();
        } catch (Exception $e){
            return "Erro ao excluir! ".$e->getMessage();
        }
    }
    
    public function consultarId($id){
        $this->sql = "Select * from grupo_risco where id = ".$id;
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon();
            return $p->query($this->sql)->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }
    
    public function consultar(){
        $this->sql = "Select * from grupo_risco";
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