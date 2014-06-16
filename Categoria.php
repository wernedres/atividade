<?php

require_once 'Crud.php';

class Categoria extends Crud {

    private $nome;
    protected $table = "m2_categoria";

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function insert() {
        $stmt = $this->db->prepare("Insert into $this->table (nome) values(:nome)");
        $stmt->bindParam(":nome", $this->nome);
        $stmt->execute();
        echo '<script>window.location.replace("../categorias.php")</script>;';
    }

    public function update($id) {
        $stmt = $this->db->prepare("Update $this->table set nome=:nome where id=$id");
        $stmt->bindParam(":nome", $this->nome);
        $stmt->execute();
        echo '<script>window.location.replace("../categorias.php")</script>;';
    }

}
