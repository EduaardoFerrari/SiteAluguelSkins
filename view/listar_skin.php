<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de Skins</title>
    <link rel="stylesheet" href="../assets/css.css">
</head>

<body>

    <header class="site-header">
        <a href="../telaInicial.php" class="btn-voltar">Tela Inicial</a>
    </header>

    <form>
        <div class="container">
            <h2>Lista de Skins</h2>
            <?php
            echo '<a href="index.php?module=skin&action=form" class="btn-skin">Cadastrar Nova Skin</a>';
            ?>
        </div>
        <?php
        if (count($skins) > 0) {
            foreach ($skins as $skin) {
                echo "<p>ID: " . $skin->getId() . " | Nome: " . $skin->getNome() . " | Tipo: " . $skin->getTipo() . "</p>";
                echo "<p>
        <a href='index.php?module=skin&action=edit&id=" . $skin->getId() . "' class='btn-edit'>Editar</a> | 
        <a href='index.php?module=skin&action=delete&id=" . $skin->getId() . "' class='btn-delete' onclick=\"return confirm('Tem certeza que deseja excluir esta skin?');\">Excluir</a>
      </p>";
                echo "<hr>";
            }
        } else {
            echo "<p>Nenhuma skin cadastrada.</p>";
        }
        ?>
    </form>
</body>

</html>