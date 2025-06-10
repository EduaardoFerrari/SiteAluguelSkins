<?php
require_once __DIR__ . '/../model/UserDAO.php';
require_once __DIR__ . '/../model/User.php';

class UserController {
    private $dao;

    public function __construct() {
        $this->dao = new UserDAO();
    }

    public function cadastrarForm() {
        include __DIR__ . '/../view/cadastrar_usuario.php';
    }

    public function cadastrar() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nome    = $_POST["nome"];
            $sobrenome = $_POST["sobrenome"];
            $cpf     = $_POST["cpf"];
            $data_nasc = $_POST["data_nascimento"];
            $telefone  = $_POST["telefone"];
            $email   = $_POST["email"];
            $senhaHash = password_hash($_POST["senha"], PASSWORD_DEFAULT);

            $user = new User(
                0, $nome, $sobrenome, $cpf,
                $data_nasc, $telefone, $email, $senhaHash
            );

            if ($this->dao->inserir($user)) {
                header("Location: index.php?action=sucesso");
                exit;
            } else {
                $error = "Erro ao cadastrar. Tente novamente.";
                include __DIR__ . '/../view/cadastrar_usuario.php';
            }
        }
    }

    public function sucesso() {
        include __DIR__ . '/../view/sucesso.php';
    }
}
