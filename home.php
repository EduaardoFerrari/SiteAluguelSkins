<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Início </title>
    <link rel="stylesheet" href="styleHome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header-principal">
        <div class="logo">
            <h1> RentSkins </h1>
            <span class="barra"></span> 
        </div>

        <nav class="nav-principal">
            <ul class="nav-links">
                <li><a href="#"> Sobre </a></li>
                <li><a href="#"> Ajuda </a></li>
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

    <section class="conteudo">
        <p class="fonte"> Empreste suas skins para os maiores do 
            <span id="cor">cenário!</span> 
        </p>
    </section>
    <section>
        <div class="ajuste">
            <p id="fonte2"> Veja suas skins com seus jogadores favoritos em grandes campeonatos :D </p>
            <hr class="custom">
        </div>
    </section>

    <section class="conteudo2">
            <button class="disp" id="fonte2"> Veja os inventários disponiveis </button>
            <button class="disp" id="fonte2"> Saiba mais! </button>
    </section>
    
    <section class="jogadores"> 
        <h2> Confira Nossos Jogadores! </h2>
        <div class="grid-jog"> 
            <div class="img-jog"> 
                <img src="fallen.png" alt="fó">
                <h3> Professor </h3>
            </div>
            
            <div class="img-jog"> 
                <img src="molodoy.png" alt="goat">
                <h3> Molodoy </h3>
            </div>

            <div class="img-jog"> 
                <img src="yekindar.png" alt="yekindar">
                <h3> Yekindar </h3>
            </div>

            <div class="img-jog"> 
                <img src="yurih.png" alt="yuurih">
                <h3> Yuurih </h3>
            </div>

            <div class="img-jog"> 
                <img src="ks.png" alt="ks">
                <h3> KSCERATO </h3>
            </div>
        </div>
    </section>

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