<?php

 

class User {
    
    private $id;
    private $email;
    private $senha;
    private $nome;
    private $documento;
    private $cidade;
    private $idGrupo;
    private $idTipo;
    
    public function __construct($id, $email, $senha, $nome, $documento, $cidade, 
    $idGrupo, $idTipo) {
        $this->id = $id;
        $this->email = $email;
        $this->senha = $senha;
        $this->nome = $nome;
        $this->documento = $documento;
        $this->cidade = $cidade;
        $this->idGrupo = $idGrupo;
        $this->idTipo = $idTipo;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id): void {
        $this->id = $id;
    }


    public function setEmail($email): void {
        $this->email = $email;
    }
    public function getEmail() {
        return $this->email;
    }


    public function setSenha($senha): void {
        $this->senha = $senha;
    }
    public function getSenha() {
        return $this->senha;
    }
 

    public function setNome($nome): void {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }

    
    public function setDocumento($documento): void {
        $this->documento = $documento;
    }
    public function getDocumento() {
        return $this->documento;
    }


    public function setCidade($cidade): void {
        $this->cidade = $cidade;
    }
    public function getCidade() {
        return $this->cidade;
    }


    public function setIdGrupo($idGrupo): void {
        $this->idGrupo = $idGrupo;
    }
    public function getIdGrupo() {
        return $this->idGrupo;
    }


    public function setIdTipo($idTipo): void {
        $this->idTipo = $idTipo;
    }
    public function getIdTipo() {
        return $this->idTipo;
    }
}
?>