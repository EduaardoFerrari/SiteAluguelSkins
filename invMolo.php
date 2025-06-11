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
            <div class="nome"> MOLODOY </div>
            <div class="info-jogador">
                <span> Furia - AWPER </span>
            </div>
        </div>
        
        <div class="armas-container">
            <!-- faca -->
            <div class="arma-categoria">
                <div class="titulo-categoria"> FACA </div>
                <div class="skin-slot faca" onclick="showSkinOptions(event, this, 'FACA')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> FACA </div>
                </div>
            </div>
            
            <!-- pistola -->
            <div class="arma-categoria">
                <div class="titulo-categoria"> PISTOLAS </div>
                <div class="skin-slot usp" onclick="showSkinOptions(event, this, 'USP')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> USP </div>
                </div>
                
                <div class="skin-slot glock" onclick="showSkinOptions(event, this, 'GLOCK')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> GLOCK-18 </div>
                </div>
            </div>
            
            <!-- snipers -->
            <div class="arma-categoria">
                <div class="titulo-categoria"> SNIPERS </div>
                <div class="skin-slot awp" onclick="showSkinOptions(event, this, 'AWP')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> AWP </div>
                </div>
                
                <div class="skin-slot scout" onclick="showSkinOptions(event, this, 'SCOUT')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> SCOUT </div>
                </div>
            </div>
            
            <!-- rifles -->
            <div class="arma-categoria">
                <div class="titulo-categoria"> RIFLES </div>
                <div class="skin-slot ak-47" onclick="showSkinOptions(event, this, 'AK47')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> AK-47 </div>
                </div>
                
                <div class="skin-slot m4a1-s" onclick="showSkinOptions(event, this, 'M4A1-S')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> M4A1-S </div>
                </div>
            </div>
            
            <!-- eagle -->
            <div class="arma-categoria">
                <div class="titulo-categoria"> DESERT EAGLE </div>
                <div class="skin-slot deagle" onclick="showSkinOptions(event, this, 'DEAGLE')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> DESERT EAGLE </div>
                </div>
            </div>
            
            <!-- SMGs -->
            <div class="arma-categoria">
                <div class="titulo-categoria"> SMGs </div>
                <div class="skin-slot mp9" onclick="showSkinOptions(event, this, 'MP9')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> MP9 </div>
                </div>

                <div class="skin-slot mac" onclick="showSkinOptions(event, this, 'MAC-10')"></div>
                <div class="skin-info">
                    <div class="nome-skin"> MAC-10 </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Painel do jogador -->
    <div class="painel-jogador">
        <div class="ver-jogador">
            <img src="assets/img/molodoy.png" alt="Jogador" id="player-image">
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
            
            // Posiciona o menu
            const rect = element.getBoundingClientRect();
            info.style.top = `${rect.bottom}px`;
            info.style.left = `${rect.left}px`;
            
            // Atualiza a visualização do jogador
            updateVerJogador(skinId);
        }
        
        function updateVerJogador(skinId) {
            const skin = skinsData[skinId];
            const nameElement = document.getElementById('selected-nome-skin');
            const equipButton = document.getElementById('equip-button');
            
            // Atualiza os elementos com os dados da skin
            preview.innerHTML = `<img src="${skin.image}" alt="${skin.name}">`;
            nameElement.textContent = skin.name;
            statsElement.textContent = skin.stats;
            equipButton.disabled = false;
        }
        
        // Fecha os menus quando clicar fora
        document.addEventListener('click', function() {
            document.querySelectorAll('.skin-info').forEach(info => {
                info.classList.remove('show');
            });
        });
        
        // Botão de equipar
        document.getElementById('equip-button').addEventListener('click', function() {
            const skinName = document.getElementById('selected-nome-skin').textContent;
            alert(`Skin ${skinName} equipada com sucesso!`);
        });

        /*
        //Caso o enzo precise
        function enviarSelecao() {
            alert("Seleção enviada com sucesso!");
        }
        */

    </script>
</body>
</html>