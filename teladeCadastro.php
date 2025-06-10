<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro Cliente</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="assets/css.css">
=======
    <link rel="stylesheet" href="css.css">
>>>>>>> 764079f958e50873ed268709cb10eec916439160
</head>
<body>
</body>

<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $cpf = $_POST["cpf"];
    $data_nascimento = $_POST["data_nascimento"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, sobrenome, cpf, data_nascimento, telefone, email, senha)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssssss", $nome, $sobrenome, $cpf, $data_nascimento, $telefone, $email, $senha);

    if (mysqli_stmt_execute($stmt)) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conn);
    }
}
?>

<form method="POST">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="text" name="sobrenome" placeholder="Sobrenome" required>
    <input type="text" name="cpf" placeholder="CPF" required>
    <input type="date" name="data_nascimento" required>
    <input type="text" name="telefone" placeholder="Telefone" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit">Cadastrar</button>
</form>