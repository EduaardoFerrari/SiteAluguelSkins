<?php

include_once __DIR__ . '/../view/db.php';
include_once __DIR__ . '/Skin.php';

class SkinDAO {
    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function listar() {
        $sql = "SELECT * FROM skins";
        $res = $this->conn->query($sql);
        $skins = [];
        while ($row = $res->fetch_assoc()) {
            $skins[] = new Skin($row["id"], $row["nome"], $row["tipo"]);
        }
        return $skins;
    }

    public function buscarPorId($id) {
        $sql = "SELECT * FROM skins WHERE id = $id";
        $res = $this->conn->query($sql);
        if ($row = $res->fetch_assoc()) {
            return new Skin($row["id"], $row["nome"], $row["tipo"]);
        }
        return null;
    }

    public function inserir($skin) {
        $sql = "INSERT INTO skins (nome, tipo) VALUES ('{$skin->getNome()}', '{$skin->getTipo()}')";
        return $this->conn->query($sql);
    }

    public function atualizar($skin) {
        $sql = "UPDATE skins SET nome='{$skin->getNome()}', tipo='{$skin->getTipo()}' WHERE id={$skin->getId()}";
        return $this->conn->query($sql);
    }

    public function excluir($id) {
        $sql = "DELETE FROM skins WHERE id=$id";
        return $this->conn->query($sql);
    }
}
?>
