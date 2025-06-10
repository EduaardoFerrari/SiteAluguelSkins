<?php
include_once __DIR__ . '/../db.php';
include_once __DIR__ . '/User.php';

class UserDAO {
    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function listar() {
        $sql = "SELECT * FROM usuarios";
        $res = $this->conn->query($sql);
        $users = [];
        while ($row = $res->fetch_assoc()) {
            $users[] = new User(
                $row["id"],
                $row["nome"],
                $row["sobrenome"],
                $row["cpf"],
                $row["data_nascimento"],
                $row["telefone"],
                $row["email"],
                $row["senha"]
            );
        }
        return $users;
    }

    public function buscarPorId($id) {
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $res = $this->conn->query($sql);
        if ($row = $res->fetch_assoc()) {
            return new User(
                $row["id"],
                $row["nome"],
                $row["sobrenome"],
                $row["cpf"],
                $row["data_nascimento"],
                $row["telefone"],
                $row["email"],
                $row["senha"]
            );
        }
        return null;
    }

    public function inserir(User $user) {
        $nome     = $user->getNome();
        $sobrenome= $user->getSobrenome();
        $cpf      = $user->getCpf();
        $data     = $user->getDataNascimento();
        $tel      = $user->getTelefone();
        $email    = $user->getEmail();
        $senha    = $user->getSenhaHash();

        $sql = "INSERT INTO usuarios 
                (nome, sobrenome, cpf, data_nascimento, telefone, email, senha)
                VALUES
                ('$nome', '$sobrenome', '$cpf', '$data', '$tel', '$email', '$senha')";
        return $this->conn->query($sql);
    }

    public function atualizar(User $user) {
        $id       = $user->getId();
        $nome     = $user->getNome();
        $sobrenome= $user->getSobrenome();
        $cpf      = $user->getCpf();
        $data     = $user->getDataNascimento();
        $tel      = $user->getTelefone();
        $email    = $user->getEmail();
        $senha    = $user->getSenhaHash();

        $sql = "UPDATE usuarios SET
                    nome = '$nome',
                    sobrenome = '$sobrenome',
                    cpf = '$cpf',
                    data_nascimento = '$data',
                    telefone = '$tel',
                    email = '$email',
                    senha = '$senha'
                WHERE id = $id";
        return $this->conn->query($sql);
    }

    public function excluir($id) {
        $sql = "DELETE FROM usuarios WHERE id = $id";
        return $this->conn->query($sql);
    }
}
