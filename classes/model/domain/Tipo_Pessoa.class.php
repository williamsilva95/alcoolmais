<?php

 

class Tipo_Pessoa {
    
    private $id;
    private $descricao;
    
    public function __construct($id, $descricao) {
        $this->id = $id;
        $this->descricao = $descricao;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

 

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }
    public function getDescricao() {
        return $this->descricao;
    }

 

}
?>