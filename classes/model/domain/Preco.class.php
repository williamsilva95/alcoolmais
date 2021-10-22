<?php

 

class Preco {
    
    private $id;
    private $preco;
    
    public function __construct($id, $preco) {
        $this->id = $id;
        $this->preco = $preco;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

 

    public function setPreco($preco): void {
        $this->preco = $preco;
    }
    public function getPreco() {
        return $this->preco;
    }

 

}
?>