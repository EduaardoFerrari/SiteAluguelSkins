<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Skin</title>
    <link rel="stylesheet" href="../assets/stylecadastrar_skin.css">
</head>

<body>

<header class="site-header">
        <a href="./cadastrar_skin.php" class="btn-voltar">Voltar</a>
    </header>

    <a href="index.php?module=skin&action=edit&id=<?= $skin->getId() ?>">
        <h2>Editar Skin</h2>
        <input type="text" name="nome" value="<?php echo $skin->getNome(); ?>" required>
        <input type="text" name="tipo" value="<?php echo $skin->getTipo(); ?>" required>
        <button type="submit">Atualizar</button>
        </form>
</body>

</html>