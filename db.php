<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "cs2_skins";

// Criar conexão
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verificar conexão
if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

/* echo "Conexão realizada com sucesso!"; */
?>
