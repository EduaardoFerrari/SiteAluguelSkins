<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Sobre Nós </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link rel="stylesheet" href="../assets/styleNos.css" />
</head>

<body>
    <div class="topo">
        <header class="header-principal">
            <div class="logo">
                <h1> RentSkins </h1>
                <span class="barra"></span>
            </div>

            <nav class="nav-principal">
                <div class="hamburger" id="hamburger">
                    <i class="fa-solid fa-burger"></i>
                </div>

                <div class="dropdown-menu" id="dropdownMenu">
                    <ul>
                        <li><a href="#"> <i class="fa-regular fa-address-card"></i> Sobre nós </a></li>
                        <li><a href="../telaInicial.php"> <i class="fas fa-sign-out-alt"></i> Sair </a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="conteudo">
            <section class="sobre">
                <h1> Sobre nós! </h1>
            </section>
            <main>
                <p>
                    Na <strong>RentSkins</strong>, unimos duas grandes paixões: a admiração pelos ídolos do
                    Counter-Strike 2 e o valor
                    das skins raras que fazem parte da história do jogo.
                    Somos a "primeira plataforma" brasileira que conecta fãs e colecionadores a jogadores profissionais,
                    permitindo que suas skins ganhem destaque nas maiores competições do cenário.
                </p>
                <p>
                    Aqui, fãs têm a chance de emprestar suas skins favoritas para que pro players as usem ao vivo em
                    grandes
                    campeonatos e transmissões oficiais — um verdadeiro palco para exibir estilo, história e
                    exclusividade.
                    Para os jogadores, é uma oportunidade de representar a comunidade com orgulho, usando itens
                    lendários em
                    momentos decisivos.
                </p>
                <p>
                    Valorizamos a segurança, a transparência e a confiança em cada empréstimo. Nosso sistema cuida de
                    todo o
                    processo com responsabilidade, garantindo que cada skin vá e volte em perfeito estado — mas com uma
                    história a mais para contar.
                </p>
                <p>
                    Se você ama CS2, coleciona com paixão e quer ver sua skin brilhar nas mãos dos melhores, a
                    <strong>RentSkins</strong> é o seu lugar.
                </p>
                <p>
                    Equipe <strong>RentSkins</strong>.
                    Mostre sua coleção ao mundo, um campeonato de cada vez.
                </p>
            </main>
            <footer>
                <a href="home.php" class="botao-voltar"> ← Voltar ao início </a>
            </footer>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const hamburger = document.getElementById('hamburger');
                const dropdownMenu = document.getElementById('dropdownMenu');

                hamburger.addEventListener('click', function () {
                    dropdownMenu.classList.toggle('show');
                });

                // Fechar o menu ao clicar fora
                document.addEventListener('click', function (event) {
                    if (!hamburger.contains(event.target)) {
                        dropdownMenu.classList.remove('show');
                    }
                });
            });
        </script>
</body>

</html>