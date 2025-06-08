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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
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
        <div class="colaboradores-carrossel"> 
            <div class="img-jog"> 
                <img src="fallen.png" alt="fó">
                <h3> Professor </h3>
                <p> Rifler/Suporte </p>
            </div>
            
            <div class="img-jog"> 
                <img src="molodoy.png" alt="goat">
                <h3> Molodoy </h3>
                <p> Awper </p>
            </div>

            <div class="img-jog"> 
                <img src="yekindar.png" alt="yekindar">
                <h3> Yekindar </h3>
                <p> Entry Fragger </p>
            </div>

            <div class="img-jog"> 
                <img src="yurih.png" alt="yuurih">
                <h3> Yuurih </h3>
                <p> Rifler </p>
            </div>

            <div class="img-jog"> 
                <img src="ks.png" alt="ks">
                <h3> KSCERATO </h3>
                <p> Ancora/Lurker </p>
            </div>

            <div class="img-jog"> 
                <img src="vini.png" alt="VINI">
                <h3> VINI </h3>
                <p> IGL </p>
            </div>

            <div class="img-jog"> 
                <img src="try.png" alt="try">
                <h3> Try </h3>
                <p> Awper </p>
            </div>

            <div class="img-jog"> 
                <img src="noway.png" alt="noway">
                <h3> Noway </h3>
                <p> Rifler </p>
            </div>

            <div class="img-jog"> 
                <img src="decenty.png" alt="decenty">
                <h3> Decenty </h3>
                <p> Baiter </p>
            </div>

            <div class="img-jog"> 
                <img src="chay.png" alt="chay">
                <h3> Chay </h3>
                <p> Rifler </p>
            </div>

            <div class="img-jog"> 
                <img src="nqz.png" alt="nqz">
                <h3> NQZ </h3>
                <p> Awper </p>
            </div>

            <div class="img-jog"> 
                <img src="bigu.png" alt="bigu">
                <h3> Biguzera </h3>
                <p> IGL </p>
            </div>

            <div class="img-jog"> 
                <img src="snow.png" alt="snow">
                <h3> Snowzin </h3>
                <p> Rifler/Entry Fragger </p>
            </div>

            <div class="img-jog"> 
                <img src="davideus.png" alt="davideus">
                <h3> Dav1Deus </h3>
                <p> Rifler </p>
            </div>
            
            <div class="img-jog"> 
                <img src="dgt.png" alt="dgt">
                <h3> DGT </h3>
                <p> Rifler/Lurker </p>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
        $('.colaboradores-carrossel').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,  // Quantidade de jogadores amostra
            slidesToScroll: 1, // Rolamento dos jogadores 
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 2000
        });
</script>
</body>
</html>