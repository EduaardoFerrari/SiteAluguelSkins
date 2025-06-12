<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleKS.css">
    <title> Troca </title>

</head>

<body>
    <!-- Painel Skins -->
    <div class="painel-skins">
        <div class="header">
            <div class="nome"> FALLEN </div>
            <div class="info-jogador">
                <span> Furia - Rifler/Suporte </span>
            </div>
        </div>
        
        <div class="armas-container">
            <!-- faca -->
            <div class="arma-categoria">
                <div class="titulo-categoria"> FACA </div>
                <div class="skin-slot faca" onclick="showSkinOptions(event, this, 'FACA')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> FACA </div>
                    <img src="assets/img/facacsEspelhada.png" onclick="selecionarSkin(this, 'FACA')">
                </div>
            </div>
            
            <!-- pistola -->
            <div class="arma-categoria">
                <div class="titulo-categoria"> PISTOLAS </div>
                <div class="skin-slot usp" onclick="showSkinOptions(event, this, 'USP')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> USP </div>
                    <img src="assets/img/uspprint.png" onclick="selecionarSkin(this, 'USP')">
                </div>
                
                <div class="skin-slot glock" onclick="showSkinOptions(event, this, 'GLOCK')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> GLOCK-18 </div>
                    <img src="assets/img/glockeme.png" onclick="selecionarSkin(this, 'GLOCK')">
                </div>
            </div>
            
            <!-- snipers -->
            <div class="arma-categoria">
                <div class="titulo-categoria"> SNIPERS </div>
                <div class="skin-slot awp" onclick="showSkinOptions(event, this, 'AWP')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> AWP </div>
                    <img src="assets/img/redline.png" onclick="selecionarSkin(this, 'AWP')">
                </div>
                
                <div class="skin-slot scout" onclick="showSkinOptions(event, this, 'SCOUT')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> SCOUT </div>
                    <img src="assets/img/turbopeek.png" onclick="selecionarSkin(this, 'SCOUT')">
                </div>
            </div>
            
            <!-- rifles -->
            <div class="arma-categoria">
                <div class="titulo-categoria"> RIFLES </div>
                <div class="skin-slot ak47" onclick="showSkinOptions(event, this, 'AK47')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> AK-47 </div>
                    <img src="assets/img/fireser.png" onclick="selecionarSkin(this, 'AK47')">
                </div>
                
                <div class="skin-slot m4a1-s" onclick="showSkinOptions(event, this, 'M4A1-S')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> M4A1-S </div>
                    <img src="assets/img/printstream.png" onclick="selecionarSkin(this, 'M4A1-S')">
                </div>
            </div>
            
            <!-- eagle -->
            <div class="arma-categoria">
                <div class="titulo-categoria"> DESERT EAGLE </div>
                <div class="skin-slot deagle" onclick="showSkinOptions(event, this, 'DEAGLE')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> DESERT EAGLE </div>
                    <img src="assets/img/deagleblaze.png" onclick="selecionarSkin(this, 'DEAGLE')">
                </div>
            </div>
            
            <!-- SMGs -->
            <div class="arma-categoria">
                <div class="titulo-categoria"> SMGs </div>
                <div class="skin-slot mp9" onclick="showSkinOptions(event, this, 'MP9')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> MP9 </div>
                    <img src="assets/img/montefuji.png" onclick="selecionarSkin(this, 'MP9')">
                </div>

                <div class="skin-slot mac-10" onclick="showSkinOptions(event, this, 'MAC-10')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> MAC-10 </div>
                    <img src="assets/img/macneon.png" onclick="selecionarSkin(this, 'MAC-10')">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Painel do jogador -->
    <div class="painel-jogador">
        <div class="ver-jogador">
            <img src="assets/img/fallen.png" alt="Jogador" id="player-image">
        </div>
        <button class="enviar-button" onclick="enviarSelecao()"> Enviar Skins </button>
        <a href="view/home.php" role="button" class="voltar-button"> Voltar </a>

    
    <script>
        function showSkinOptions(event, element, skinId) {
            event.stopPropagation();
            
            // Esconde todos os outros menus abertos
            document.querySelectorAll('.skin-info').forEach(info => {
                info.classList.remove('show');
            });
            
            // Mostra o menu deste slot
            const info = element.nextElementSibling;
            info.classList.add('show');
        }
        
        // Fecha os menus quando clicar fora
        document.addEventListener('click', function() {
            document.querySelectorAll('.skin-info').forEach(info => {
                info.classList.remove('show');
            });
        });

            function selecionarSkin(imgElement, armaId) {
            const slot = document.querySelector(`.skin-slot.${armaId.toLowerCase()}`);
            const imagemSkin = imgElement.getAttribute('src');

        if (slot) {
            slot.style.backgroundImage = `url('${imagemSkin}')`;
            slot.style.backgroundSize = 'contain';
            slot.style.backgroundRepeat = 'no-repeat';
            slot.style.backgroundPosition = 'center';
        }

        document.querySelectorAll('.skin-info').forEach(info => {
            info.classList.remove('show');
        });
    }

    function enviarSelecao() {
        window.location.href = "view/home.php?mensagem=Skin enviada com sucesso!";
    }

    </script>
</body>
</html>