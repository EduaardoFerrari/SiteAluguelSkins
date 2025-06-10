<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Cadastro Cliente</title>
    <link rel="stylesheet" href="../StyleCss/css.css">
</head>

<body>
    <form method="post" action="../index.php?module=user&action=cadastrar">
        <h2>Cadastro de Cliente</h2>
        <?php if (!empty($error)): ?>
            <p style="color:red; text-align:center;"><?= $error ?></p>
        <?php endif; ?>
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="text" name="sobrenome" placeholder="Sobrenome" required>
        <input type="text" name="cpf" placeholder="CPF" required>
        <input type="date" name="data_nascimento" required>
        <input type="text" name="telefone" placeholder="Telefone" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>