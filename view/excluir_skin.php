<?php
include 'db.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM skins WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green; text-align:center;'>Skin excluída com sucesso!</p>";
    } else {
        echo "<p style='color:red; text-align:center;'>Erro: " . $conn->error . "</p>";
    }
} else {
    echo "<p style='color:red; text-align:center;'>ID não fornecido.</p>";
}
echo "<p style='text-align:center;'><a href='listar_skins.php'>Voltar</a></p>";
$conn->close();
