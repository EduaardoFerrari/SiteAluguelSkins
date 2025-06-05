<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Início </title>
    <link rel="stylesheet" href="styleHome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
    <header class="header-principal">
        <div class="logo">
            <h1> RentSkins </h1>
        </div>

        <nav class="nav-principal">
            <ul class="nav-links">
                <li><a href="#"> Sobre </a></li>
                <li><a href="#"> Nossos Serviços </a></li>
            </ul>

            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </div>

            <div class="dropdown-menu" id="dropdownMenu">
                <ul>
                    <li><a href="#"> <i class="fas fa-user"></i> Minha Conta </a></li>
                    <li><a href="#"> <i class="fas fa-cog"></i> Configurações </a></li>
                    <li><a href="#"> <i class="fas fa-sign-out-alt"></i> Sair </a></li>
                </ul>
            </div>
        </nav>
    </header>

    <body>
        <p> TESTE TESTE TESTE TESTE </p>
    </body>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburger');
    const dropdownMenu = document.getElementById('dropdownMenu');

    hamburger.addEventListener('click', function() {
        dropdownMenu.classList.toggle('show');
    });

    // Fechar o menu ao clicar fora
    document.addEventListener('click', function(event) {
        if (!hamburger.contains(event.target)) {
            dropdownMenu.classList.remove('show');
        }
    });
});
    </script>
</body>
</html>