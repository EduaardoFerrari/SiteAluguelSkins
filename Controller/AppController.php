<?php

require_once __DIR__ . '/../model/UserDAO.php';
require_once __DIR__ . '/../model/User.php';
require_once __DIR__ . '/../model/SkinDAO.php';
require_once __DIR__ . '/../model/Skin.php';

class AppController {
    private $userDao;
    private $skinDao;

    public function __construct() {
        $this->userDao = new UserDAO();
        $this->skinDao = new SkinDAO();
    }

    // Formulário de cadastro de usuário
    public function userForm() {
        include __DIR__ . '/../view/cadastrar_usuario.php';
    }

    // Cadastro de usuário (POST)
    public function userCreate() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new User(
                0,
                $_POST['nome'],
                $_POST['sobrenome'],
                $_POST['cpf'],
                $_POST['data_nascimento'],
                $_POST['telefone'],
                $_POST['email'],
                password_hash($_POST['senha'], PASSWORD_DEFAULT)
            );
            if ($this->userDao->inserir($user)) {
                header('Location: index.php?module=user&action=success');
                exit;
            }
            $error = 'Erro ao cadastrar. Tente novamente.';
        }
        include __DIR__ . '/../view/cadastrar_usuario.php';
    }

    // Página de sucesso após cadastro
    public function userSuccess() {
        include __DIR__ . '/../view/sucesso.php';
    }

    // Listagem de skins
    public function skinIndex() {
        $skins = $this->skinDao->listar();
        include __DIR__ . '/../view/listar_skin.php';
    }

    // Formulário para criar skin
  public function skinForm() {
    include __DIR__ . '/../view/cadastrar_skin.php';
}
    // Criação de skin (POST)
    public function skinCreate() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $skin = new Skin(0, $_POST['nome'], $_POST['tipo']);
            if ($this->skinDao->inserir($skin)) {
                header('Location: index.php?module=skin&action=index');
                exit;
            }
            $error = 'Erro ao cadastrar skin.';
        }
        include __DIR__ . '/../view/cadastrar_skin.php';
    }

    // Edição de skin
    public function skinEdit($id) {
        $skin = $this->skinDao->buscarPorId($id);
        if (!$skin) {
            $this->notFound();
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $skin->setNome($_POST['nome']);
            $skin->setTipo($_POST['tipo']);
            $this->skinDao->atualizar($skin);
            header('Location: index.php?module=skin&action=index');
            exit;
        }
        include __DIR__ . '/../view/editar_skin.php';
    }

    // Exclusão de skin
    public function skinDelete($id) {
        $this->skinDao->excluir($id);
        header('Location: index.php?module=skin&action=index');
        exit;
    }

    // Página 404 personalizada
    private function notFound($msg = 'Página não encontrada') {
        http_response_code(404);
        echo "<h1>404 — {$msg}</h1>";
        exit;
    }
}
