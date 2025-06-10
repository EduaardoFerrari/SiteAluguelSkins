<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Skin</title>
    <link rel="stylesheet" href="../StyleCss/stylecadastrar_skin.css">
</head>

<body>
    <a href="index.php?module=skin&action=edit&id=<?= $skin->getId() ?>">
        <h2>Editar Skin</h2>
        <input type="text" name="nome" value="<?php echo $skin->getNome(); ?>" required>
        <input type="text" name="tipo" value="<?php echo $skin->getTipo(); ?>" required>
        <button type="submit">Atualizar</button>
        <p><a href="index.php" style="color: #FF5722;">Voltar</a></p>
        </form>
</body>

</html>