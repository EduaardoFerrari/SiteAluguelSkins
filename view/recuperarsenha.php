<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"] ?? "";
    $nova_senha = $_POST["nova_senha"] ?? "";

    $conn = new mysqli("localhost", "root", "", "cs2_skins");
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Verifica se o e-mail existe
    $stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        // Criptografa a nova senha
        $senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT);

        // Atualiza a senha no banco
        $stmt = $conn->prepare("UPDATE usuarios SET senha = ? WHERE email = ?");
        $stmt->bind_param("ss", $senha_hash, $email);
        if ($stmt->execute()) {
            $mensagem = "<div class='success-message'>Senha atualizada com sucesso!</div>";
        } else {
            $mensagem = "<div class='error-message'>Erro ao atualizar senha: " . $stmt->error . "</div>";
        }
    } else {
        $mensagem = "<div class='error-message'>E-mail não encontrado.</div>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Recuperar Senha</title>
    <link rel="stylesheet" href="../assets/css.css">
</head>

<body>

    <header class="site-header">
        <a href="../telaInicial.php" class="btn-voltar">Tela Inicial</a>
    </header>


    <form method="post" action="">
        <h2>Recuperar Senha</h2>

        <?php if (!empty($mensagem)) echo $mensagem; ?>

        <input type="email" name="email" placeholder="Email cadastrado" required>
        <input type="password" name="nova_senha" placeholder="Nova senha" required>
        <button type="submit">Atualizar Senha</button>
    </form>
</body>

</html>