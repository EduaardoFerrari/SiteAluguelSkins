<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Dados recebidos
    $nome = $_POST["nome"] ?? "";
    $sobrenome = $_POST["sobrenome"] ?? "";
    $cpf = $_POST["cpf"] ?? "";
    $data_nascimento = $_POST["data_nascimento"] ?? "";
    $telefone = $_POST["telefone"] ?? "";
    $email = $_POST["email"] ?? "";
    $senha = $_POST["senha"] ?? "";

    // Conexão com o banco (ajuste os dados abaixo conforme seu ambiente)
    $conn = new mysqli("localhost", "root", "", "cs2_skins");

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Prepara e executa o INSERT
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, sobrenome, cpf, data_nascimento, telefone, email, senha) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $nome, $sobrenome, $cpf, $data_nascimento, $telefone, $email, $senha);

    if ($stmt->execute()) {
        $mensagem = "<div class='success-message'>Usuário cadastrado com sucesso!</div>";
    } else {
        $mensagem = "<div class='error-message'>Erro ao cadastrar: " . $stmt->error . "</div>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Cadastro Cliente</title>
    <link rel="stylesheet" href="../assets/css.css">
</head>

<body>

    <header class="site-header">
        <a href="../telaInicial.php" class="btn-voltar">Tela Inicial</a>
    </header>

    <form method="post" action="">
        <h2>Cadastro de Cliente</h2>

        <?php if (!empty($mensagem)) echo $mensagem; ?>

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