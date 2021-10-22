<?php

 

class ProdutoDAO {
    
    private $sql;
    
    public function inserir($objProduto) {
        $this->sql = "INSERT INTO produtos (nome, preco, descricao) VALUES (:nome, :preco, :descricao)";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon()->prepare($this->sql);
            $p->bindValue(":nome", $objProduto->getNome());
            $p->bindValue(":preco", $objProduto->getPreco());
            $p->bindValue(":descricao", $objProduto->getDescricao());
            return $p->execute();
        } catch (Exception $e){
            return "Erro ao inserir! ".$e->getMessage();
        }
    }

    public function alterar($objProduto) {
        $this->sql = "UPDATE produtos set nome = :nome, preco = :preco, descricao = :descricao WHERE id = :id ";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon()->prepare($this->sql);
            $p->bindValue(":nome", $objProduto->getNome());
            $p->bindValue(":preco", $objProduto->getPreco());
            $p->bindValue(":descricao", $objProduto->getDescricao());
            $p->bindValue(":id", $objProduto->getId());
            return $p->execute();
        } catch (Exception $e){
            return "Erro ao alterar! ".$e->getMessage();
        }
    }
    
    public function excluir($objProduto){
        $this->sql = "DELETE FROM produtos WHERE id = :id ";
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon()->prepare($this->sql);
            $p->bindValue(":id", $objProduto->getId());
            return $p->execute();
        } catch (Exception $e){
            return "Erro ao excluir! ".$e->getMessage();
        }
    }
    
    public function consultarId($id){
        $this->sql = "Select * from produtos where id = ".$id;
        try{
            $conexao = new Conexao();
            $p = $conexao->getCon();
            return $p->query($this->sql)->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e){
            return "Erro ao consultar! ".$e->getMessage();
        }
    }
    
    public function consultar(){
        $this->sql = "select * from produtos";
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