<?php

 

class Produto {
    
    private $id;
    private $nome;
    private $preco;
    private $descricao;
    
    public function __construct($id, $nome, $preco, $descricao) {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

 

    public function setNome($nome): void {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }

    
    public function setPreco($preco): void {
        $this->preco = $preco;
    }
    public function getPreco() {
        return $this->preco;
    }


    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }
    public function getDescricao() {
        return $this->descricao;
    }

 

}
?>