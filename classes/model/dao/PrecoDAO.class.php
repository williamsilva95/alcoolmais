<?php

 

class PrecoDAO {
    
    private $sql;
    
    public function inserir($objPreco) {
        $this->sql = "INSERT INTO preco (preco) VALUES (:preco)";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon()->prepare($this->sql);
            $p->bindValue(":preco", $objPreco->getPreco());
            return $p->execute();
        } catch (Exception $e){
            return "Erro ao inserir! ".$e->getMessage();
        }
    }

    public function alterar($objPreco) {
        $this->sql = "UPDATE preco set preco = :preco WHERE id = :id ";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon()->prepare($this->sql);
            $p->bindValue(":preco", $objPreco->getPreco());
            $p->bindValue(":id", $objPreco->getId());
            return $p->execute();
        } catch (Exception $e){
            return "Erro ao alterar! ".$e->getMessage();
        }
    }
    
    public function excluir($objPreco){
        $this->sql = "DELETE FROM preco WHERE id = :id ";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon()->prepare($this->sql);
            $p->bindValue(":id", $objPreco->getId());
            return $p->execute();
        } catch (Exception $e){
            return "Erro ao excluir! ".$e->getMessage();
        }
    }
    
    public function consultarId($id){
        $this->sql = "Select * from preco where id = ".$id;
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon();
            return $p->query($this->sql)->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }
    
    public function consultar(){
        $this->sql = "Select * from preco";
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