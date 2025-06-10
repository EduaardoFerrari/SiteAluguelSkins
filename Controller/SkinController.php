<?php
include_once 'model/SkinDAO.php';
include_once 'model/Skin.php';

class SkinController {
    private $dao;

    public function __construct() {
        $this->dao = new SkinDAO();
    }

    public function index() {
        $skins = $this->dao->listar();
        include 'view/listar_skin.php';
    }

    public function create() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $skin = new Skin(0, $_POST["nome"], $_POST["tipo"]);
            $this->dao->inserir($skin);
            header("Location: index.php");
            exit;
        }
        include 'view/cadastrar_skin.php';
    }

    public function edit($id) {
        $skin = $this->dao->buscarPorId($id);
        if (!$skin) {
            echo "<p style='color:red; text-align:center;'>Skin não encontrada.</p>";
            echo "<p style='text-align:center;'><a href='index.php'>Voltar</a></p>";
            exit;
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $skin->setNome($_POST["nome"]);
            $skin->setTipo($_POST["tipo"]);
            $this->dao->atualizar($skin);
            header("Location: index.php");
            exit;
        }
        include 'view/editar_skin.php';
    }

    public function delete($id) {
        $this->dao->excluir($id);
        header("Location: index.php");
        exit;
    }
}
?>
