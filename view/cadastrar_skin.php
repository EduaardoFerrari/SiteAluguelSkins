<?php
require_once '../db.php';
$pro_players_result = mysqli_query($conn, "SELECT id, nome FROM pro_players");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Skin</title>
    <link rel="stylesheet" href="../StyleCss/stylecadastrar_skin.css">
</head>

<body>

    <form method="post" action="../index.php?module=skin&action=create">
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
            <option value="">Selecione um Jogador Profissional</option>
            <?php while ($player = mysqli_fetch_assoc($pro_players_result)): ?>
                <option value="<?= $player['id'] ?>"><?= $player['nome'] ?></option>
            <?php endwhile; ?>
        </select>

        <button type="submit">Cadastrar Skin</button>
    </form>

</body>

</html>