<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"] ?? "";
    $nickname = $_POST["nickname"] ?? "";
    $nacionalidade = $_POST["nacionalidade"] ?? "";
    $time = $_POST["time"] ?? "";
    $posicao = $_POST["posicao"] ?? "";
    $data_nascimento = $_POST["data_nascimento"] ?? "";
    $email = $_POST["email"] ?? "";
    $senha = $_POST["senha"] ?? "";

    $conn = new mysqli("localhost", "root", "", "cs2_skins");

    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Criptografar a senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO pro_players (nome, nickname, nacionalidade, time, posicao, data_nascimento, email, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $nome, $nickname, $nacionalidade, $time, $posicao, $data_nascimento, $email, $senha_hash);

    if ($stmt->execute()) {
        $mensagem = "<div class='success-message'>Pro player cadastrado com sucesso!</div>";
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
    <title>Cadastro Pro Player</title>
    <link rel="stylesheet" href="../StyleCss/css.css">
</head>

<body>
    <header class="site-header">
        <a href="../view/home.php" class="btn-voltar">Tela Inicial</a>
    </header>
    <form method="post" action="">
        <h2>Cadastro de Pro Player</h2>

        <?php if (!empty($mensagem)) echo $mensagem; ?>

        <input type="text" name="nome" placeholder="Nome real" required>
        <input type="text" name="nickname" placeholder="Nickname in-game" required>
        <input type="text" name="nacionalidade" placeholder="Nacionalidade" required>
        <input type="text" name="time" placeholder="Time atual" required>
        <input type="text" name="posicao" placeholder="Função (ex: AWPer, Entry, etc.)" required>
        <input type="email" name="email" placeholder="Email do pro player" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <input type="date" name="data_nascimento" required>

        <button type="submit">Cadastrar Pro Player</button>
    </form>
</body>

</html>