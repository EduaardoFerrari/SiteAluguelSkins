<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de Skins</title>
    <link rel="stylesheet" href="../assets/css.css">
</head>

<body>
    <form>
        <h2>Lista de Skins</h2>
        <a href="index.php?action=create" style="color: #FF5722; text-decoration: none;">Cadastrar Nova Skin</a><br><br>
        <?php
        if (count($skins) > 0) {
            foreach ($skins as $skin) {
                echo "<p>ID: " . $skin->getId() . " | Nome: " . $skin->getNome() . " | Tipo: " . $skin->getTipo() . "</p>";
                echo "<p><a href='index.php?action=edit&id=" . $skin->getId() . "'>Editar</a> | <a href='index.php?action=delete&id=" . $skin->getId() . "'>Excluir</a></p>";
                echo "<hr>";
            }
        } else {
            echo "<p>Nenhuma skin cadastrada.</p>";
        }
        ?>
    </form>
</body>

</html>