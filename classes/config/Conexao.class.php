<?php
    class Conexao{
      private $con;


    public function __construct() {
        $this->con = new PDO("mysql:host=localhost:3306; dbname=sistema_alcoolmais", "root", "");
    }


    public function getCon() {
        return $this->con;
    }

}
?>