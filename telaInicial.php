<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tela de Login </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="secao-esq">
            <img src="csimagem.png" alt="Imagem decorativa">
        </div>
        <div class="secao-dir">
            <div class="caixa-login">
                <h1> RentSkins </h1>
                <h2> Alugue suas Skins! </h2>
                
                <form>
                    <div class="formulario">
                        <label for="email"> Usuário </label>
                        <input type="email" id="email" placeholder="usuario@usuario.com">
                    </div>
                    
                    <div class="formulario">
                        <label for="senha"> Senha </label>
                        <input type="senha" id="senha" placeholder="••••••••">
                    </div>
                    
                    <div class="lembre-se">
                        <input type="checkbox" id="lembrar">
                        <label for="lembrar"> Lembre-se de mim </label>
                    </div>
                    
                    <button type="submit" class="botao-login"> Entrar </button>
                    
                    <div class="link-ajuda">
                        <a href="#"> Não consegue acessar? </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>