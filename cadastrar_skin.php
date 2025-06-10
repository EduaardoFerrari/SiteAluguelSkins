<?php
require_once 'db.php';

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $imagem_url = $_POST["imagem_url"];
    $pro_player_id = $_POST["pro_player_id"];

    $sql = "INSERT INTO skins (nome, tipo, imagem_url, pro_player_id) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $nome, $tipo, $imagem_url, $pro_player_id);

    if (mysqli_stmt_execute($stmt)) {
        echo "<p>Skin cadastrada com sucesso!</p>";
    } else {
        echo "<p>Erro ao cadastrar skin: " . mysqli_error($conn) . "</p>";
    }
}

// Buscar pro players para o <select>
$pro_players_result = mysqli_query($conn, "SELECT id, nome FROM pro_players");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Skin</title>
    <link rel="stylesheet" href="stylecadastrar_skin.css">
</head>

<body>

    <form method="POST">
        <h2>Cadastrar Skin</h2>
        <input type="text" name="nome" placeholder="Nome da skin" required>
        <select name="tipo" required>
            <option value="">Selecione o tipo de arma</option>
            <option value="faca">Faca</option>
            <option value="rifle">Rifle</option>
            <option value="pistola">Pistola</option>
            <option value="metralhadora">Metralhadora</option>
            <option value="shotgun">Shotgun</option>
            <option value="sniper">Sniper</option>
            <option value="outro">Outro</option>
        </select>
        <input type="text" name="imagem_url" placeholder="URL da imagem da skin" required>

        <select name="pro_player_id" required>
            <option value="">Selecione um Pro Player</option>
            <?php while ($player = mysqli_fetch_assoc($pro_players_result)): ?>
                <option value="<?= $player['id'] ?>"><?= $player['nome'] ?></option>
            <?php endwhile; ?>
        </select>

        <button type="submit">Cadastrar Skin</button>
    </form>

</body>

</html>